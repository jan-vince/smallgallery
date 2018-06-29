<?php

namespace JanVince\SmallGallery\Components;

use Db;
use Carbon\Carbon;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use JanVince\SmallGallery\Models\Category;
use JanVince\SmallGallery\Models\Gallery;
use JanVince\SmallGallery\Models\Settings;

class Galleries extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'janvince.smallgallery::lang.components.galleries.name',
            'description' => 'janvince.smallgallery::lang.components.galleries.description',
        ];
    }

    public function defineProperties()
    {

        return [
            'categorySlug'    => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.category',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.category_description',
                'type'        => 'string',
                'default'     => '{{ :category }}',
            ],
            'tagSlug'    => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.tag',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.tag_description',
                'type'        => 'string',
                'default'     => '{{ :tag }}',
            ],
            'activeOnly'      => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.active_only',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.active_only_description',
                'type'        => 'checkbox',
                'default'     => true,
            ],
            'rootOnly'      => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.root_only',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.root_only_description',
                'type'        => 'checkbox',
                'default'     => false,
            ],
            'favouriteOnly'      => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.favourite_only',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.favourite_only_description',
                'type'        => 'checkbox',
                'default'     => false,
            ],
            'allowLimit'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.allow_limit',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.allow_limit_description',
                'type'        => 'checkbox',
                'default'     => 'false',
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.limit',
            ],
            'limit'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.limit',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.limit_description',
                'type'        => 'string',
                'default'     => 10,
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.limit',
            ],
            'detailPageSlug'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.detail_page_slug',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.detail_page_slug_description',
                'type'        => 'dropdown',
                'default'     => 'gallery',
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.links',
            ],
            'detailPageParam'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.detail_page_param',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.detail_page_param_description',
                'type'        => 'string',
                'default'     => '{{ :slug }}',
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.links',
            ],
            'allowSorting'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.allow_sorting',
                'type'        => 'checkbox',
                'default'     => false,
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.sort',
            ],
            'orderBy'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.sort_by',
                'type'        => 'dropdown',
                'default'     => 'date',
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.sort',
            ],
            'orderByDirection'   => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.sort_by_direction',
                'type'        => 'dropdown',
                'default'     => 'DESC',
                'group'       => 'janvince.smallgallery::lang.components.galleries.properties.groups.sort',
            ],
        ];

    }

    public function getDetailPageSlugOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getOrderByOptions()
    {
        return [
            'id' => e(trans('janvince.smallgallery::lang.common.columns.id')),
            'name' => e(trans('janvince.smallgallery::lang.common.columns.name')),
            'url' =>  e(trans('janvince.smallgallery::lang.common.columns.url')),
            'slug' =>  e(trans('janvince.smallgallery::lang.common.columns.slug')),
            'date' => e(trans('janvince.smallgallery::lang.common.columns.date')),
            'active' => e(trans('janvince.smallgallery::lang.common.columns.active')),
            'favourite' => e(trans('janvince.smallgallery::lang.common.columns.favourite')),
            'created_at' => e(trans('janvince.smallgallery::lang.common.columns.created_at')),
            'updated_at' => e(trans('janvince.smallgallery::lang.common.columns.updated_at')),
        ];
    }

    public function getOrderByDirectionOptions()
    {
        return [
            'ASC' => e(trans('janvince.smallgallery::lang.common.asc')),
            'DESC' => e(trans('janvince.smallgallery::lang.common.desc')),
        ];
    }

    public function onRender()
    {

        /**
         *  Allow some varibles from component
         */
        $this->page['cssClass'] = $this->property('cssClass');
        $this->page['detailPageSlug'] = $this->property('detailPageSlug');
        $this->page['detailPageParam'] = $this->propertyName('detailPageParam');
    }

    /**
     * Get root galleries
     * array @paramOverride Array of parameters names and values to override
     * return @array
     */
    public function items($rootOnly = false, $paramOverride = []) {

        $records = new Gallery;
        
        /**
         *  Filter category
         */
        if( $this->property('categorySlug') ) {
            $records->whereHas('category', function ($query) {
                $query->where('slug', '=', $this->property('categorySlug'));
            });
        }

        /**
         *  Filter tag
         */
        if( $this->property('tagSlug') ) {
            $records->whereHas('tags', function ($query) {
                $query->where('slug', '=', $this->property('tagSlug'));
            });
        }

        /**
         *  Filter active only
         */
         if( $this->property('activeOnly') or !empty($paramOverride['activeOnly']) ) {
             $records->isActive();
         }

        /**
         *  Filter favourite only
         */
         if( $this->property('favouriteOnly') or !empty($paramOverride['favouriteOnly']) ) {
             $records->isFavourite();
         }

         if($rootOnly or $this->property('rootOnly')) {
             $collection = $records->getEagerRoot();
            } else {
                $collection = $records->get();
            }
            
        /**
         *  Limit
         */
        if( $this->property('allowLimit') and  $this->property('limit') ) {
            return $collection->slice(0,$this->property('limit'));
        }

        /**
         *  Order
         */
        if( $this->property('allowSorting')  ) {

            $allowedColumns = $this->getOrderByOptions();

           if( !empty( $allowedColumns[$this->property('orderBy')] ) ) {
               $orderByColumn = $this->property('orderBy');
           } else {
               $orderByColumn = 'date';
           }

           if( in_array( strtoupper($this->property('orderByDirection')), ['ASC', 'DESC'])) {
               $orderByDirection = strtoupper($this->property('orderByDirection'));
           } else {
               $orderByDirection = 'DESC';
           }

           if($orderByDirection == 'ASC') {
               $sortedCollection = $collection->sortBy($orderByColumn);
            } else {
                $sortedCollection = $collection->sortByDesc($orderByColumn);
           }
           
           return $sortedCollection;

        }

        return $collection;
    }

    /**
     * Get testimonials from records
     * array @paramOverride Array of parameters names and values to override
     * return @array
     */
    public function testimonials($paramOverride = []) {

        $records = $this->items($paramOverride);

        $records->each( function($record, $key) use($records) {
            if (!is_array($record->testimonials) or !count($record->testimonials)) {
                $records->forget($key);
            }
        });

        return $records;
    }

    /**
     * Change property
     */
    public function changeProperty($propertyName, $propertyValue) {

        if($this->propertyExists($propertyName)) {
            $this->setProperty($propertyName, $propertyValue);
        }

    }

}
