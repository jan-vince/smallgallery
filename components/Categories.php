<?php

namespace JanVince\SmallGallery\Components;

use Db;
use Carbon\Carbon;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use JanVince\SmallGallery\Models\Category;
use JanVince\SmallGallery\Models\Record;
use JanVince\SmallGallery\Models\Settings;
use JanVince\SmallGallery\Models\Area;

class Categories extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'janvince.smallgallery::lang.components.categories.name',
            'description' => 'janvince.smallgallery::lang.components.categories.description',
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
            'activeOnly'      => [
                'title'       => 'janvince.smallgallery::lang.components.galleries.properties.active_only',
                'description' => 'janvince.smallgallery::lang.components.galleries.properties.active_only_description',
                'type'        => 'checkbox',
                'default'     => true,
            ],
            'rootOnly'      => [
                'title'       => 'janvince.smallgallery::lang.components.categories.properties.root_only',
                'description' => 'janvince.smallgallery::lang.components.categories.properties.root_only_description',
                'type'        => 'checkbox',
                'default'     => true,
            ],
        ];

    }

    public function getDetailPageSlugOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRender()
    {

        /**
         *  Allow some varibles from component
         */
        $this->page['cssClass'] = $this->property('cssClass');

    }

    /**
     * Get categories
     * return @array
     */
    public function items() {

        $categories = Category::with('galleries');

        /**
         *  Filter root only
         */
         if( $this->property('rootOnly') ) {
             $categories->whereNull('parent_id');
         }

        /**
         *  Filter active only
         */
         if( $this->property('activeOnly') ) {
             $categories->isActive();
         }

         if($this->property('rootOnly')) {
            $rootCategories = $categories->whereNull('parent_id')->get();
        } else {
            $rootCategories = $categories->get();
        }

        return $rootCategories;

    }

}
