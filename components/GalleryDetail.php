<?php

namespace JanVince\SmallGallery\Components;

use Db;
use Carbon\Carbon;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use JanVince\SmallGallery\Models\Category;
use JanVince\SmallGallery\Models\Gallery;
use JanVince\SmallGallery\Models\Settings;

class GalleryDetail extends ComponentBase
{


    /**
    * Selected record
     * @var JanVince\SmallGallery\Models\Gallery
     */
    public $galleryDetail;


    public function componentDetails()
    {
        return [
            'name'        => 'janvince.smallgallery::lang.components.gallery.name',
            'description' => 'janvince.smallgallery::lang.components.gallery.description',
        ];
    }

    public function defineProperties()
    {

        return [
            'gallerySlug'   => [
                'title'       => 'janvince.smallgallery::lang.components.gallery.properties.galleryslug',
                'description' => 'janvince.smallgallery::lang.components.gallery.properties.gallery_slug_description',
                'type'        => 'string',
                'default'     => '{{ :slug }}',
            ],
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
            'throw404'   => [
                'title'       => 'janvince.smallgallery::lang.components.gallery.properties.throw404',
                'description' => 'janvince.smallgallery::lang.components.gallery.properties.throw404_description',
                'type'        => 'checkbox',
                'default'     => false,
            ],
        ];

    }

    public function onRun()
    {

        $this->galleryDetail = $this->page['gallery'] = $this->getGallery();

        if( $this->property('gallerySlug') and !$this->galleryDetail ){
            abort(404, 'Gallery not found!');
        }

    }

    public function onRender()
    {

        /**
         *  Allow some varibles from component
         */
        $this->page['cssClass'] = $this->property('cssClass');

    }

    /**
     * Get record with filters from properties
     * return @array
     */
    private function getGallery() {

        /**
         *  Filter slug
         */
        $record = Gallery::where('slug', $this->property('gallerySlug'));

        /**
         *  Filter category
         */
        if( $this->property('categorySlug') ) {
            $record->whereHas('category', function ($query) {
                $query->where('slug', '=', $this->property('categorySlug'));
            });
        }

        /**
         *  Filter active only
         */
         if( $this->property('activeOnly') ) {
             $record->isActive();
         }

        $recordDetail = $record->first();

        return $recordDetail;

    }

}
