<?php

namespace JanVince\SmallGallery\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    public $table = 'janvince_smallgallery_categories';
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $timestamps = true;

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:janvince_smallgallery_categories',
    ];

    public $translatable = [
        'name',
        ['slug', 'index' => true],
        'content',
        'description'
    ];

    protected $guarded = [];


    /**
     * @var array Relations
     */
    public $hasMany = [
        'galleries' => [
            'JanVince\SmallGallery\Models\Gallery'
        ]
    ];

    public $attachMany = [
        'images' => ['System\Models\File', 'delete' => true],
    ];

    public $attachOne = [
        'preview_image' => ['System\Models\File'],
    ];

    /**
     *  SCOPES
     */
    public function scopeIsActive($query) {
        return $query->where('active', '=', true);
    }

}
