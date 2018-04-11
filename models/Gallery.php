<?php

namespace JanVince\SmallGallery\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;
use JanVince\SmallGallery\Models\Settings;

/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
	use \October\Rain\Database\Traits\NestedTree;

    public $table = 'janvince_smallgallery_galleries';

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $timestamps = true;

    protected $guarded = [];

    protected $jsonable = ['repeater', 'testimonials', 'images_media', 'content_blocks'];

    protected $dates = [
        'created_at',
        'updated_at',
        'date',
    ];

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:janvince_smallgallery_galleries',
    ];

    public $translatable = [
        'name',
        ['slug', 'index' => true],
        'description',
        'content',
        'url',
        'repeater',
        'testimonials',
        'images_media'
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'categories' => [
            'JanVince\SmallGallery\Models\Category',
            'table' => 'janvince_smallgallery_galleries_categories',
        ],
        'attributes' => [
            'JanVince\SmallGallery\Models\Attribute',
            'table' => 'janvince_smallgallery_galleries_attributes',
            'pivot' => ['value_text', 'value_number', 'value_boolean', 'value_string'],
            'timestamps' => true,
        ],
        'tags' => [
            'JanVince\SmallGallery\Models\Tag',
            'table' => 'janvince_smallgallery_galleries_tags',
            'timestamps' => true,
        ],

        /*
        *    Same relation with different name for frontend component
        *    - word 'attributes' is reserved!
        */
        'gallery_attributes' => [
            'JanVince\SmallGallery\Models\Attribute',
            'table' => 'janvince_smallgallery_galleries_attributes',
            'id' => 'gallery_id',
            'otherKey' => 'attribute_id',
            'pivot' => ['value_text', 'value_number', 'value_boolean', 'value_string'],
            'timestamps' => true,
        ]

    ];

    public $belongsTo = [
        'category' => [
            'JanVince\SmallGallery\Models\Category',
        ],
		'parent_gallery' => [
			'JanVince\SmallGallery\Models\Gallery',
            'table' => 'janvince_smallgallery_galleries',
			'key' => 'parent_id',
			'otherKey' => 'id'
		]
    ];

    public $attachOne = [
        'preview_image' => ['System\Models\File'],
        'image' => ['System\Models\File'],
    ];
    public $attachMany = [
        'images' => ['System\Models\File', 'delete' => true],
        'files'    => ['System\Models\File', 'delete' => true],
    ];

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

    /**
     *  SCOPES
     */
    public function scopeIsFavourite($query) {
        return $query->where('favourite', '=', true);
    }

    public function deleteAttachedImages(){

        foreach($this->images as $image){
            $image->delete();
        }

        return ['images' => count($this->images)];

    }

    /**
     * Get specific attribute by slug
     */
    public function getAttributeBySlug($slug) {

        if( empty( $this->attributes() ) ) {
            return false;
        }

        $attributes = $this->attributes()->get();

        foreach($attributes as $attribute) {

            if( $attribute->slug == $slug ) {
                return $attribute;
            }
        }

        return false;

    }

    /**
     * Get specific attribute value by slug
     */
    public function getAttributeValueBySlug($slug) {

        if( empty( $this->attributes() ) ) {
            return false;
        }

        $attributes = $this->attributes()->get();

        foreach($attributes as $attribute) {

            if( $attribute->slug == $slug ) {
                return $attribute->value();
            }
        }

        return false;

    }

    /**
    *    FILTERS
    */
    public function filterFields($fields, $context = NULL) {

        $allowed_fields = Settings::get('allowed_fields');

        $protected_fields = [
            'id',
            'name',
            'slug',
        ];

        foreach( $fields as $fieldKey => $field ) {

            if( ( empty($allowed_fields) && !in_array($fieldKey, $protected_fields) ) or
                ( !in_array($fieldKey, $protected_fields) && !in_array($fieldKey, $allowed_fields) ) ) {
                $fields->{$fieldKey}->hidden = true;
            }
        }
    }
}
