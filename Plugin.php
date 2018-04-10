<?php

namespace JanVince\SmallGallery;

use Backend;
use BackendAuth;
use Controller;
use Config;
use System\Classes\PluginBase;
use System\Classes\PluginManager;
use Event;
use JanVince\SmallGallery\Models\Settings;
use JanVince\SmallGallery\Models\Gallery;


class Plugin extends PluginBase
{

    /**
     * @var array Plugin dependencies
     */
    public $require = [];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'janvince.smallgallery::lang.plugin.name',
            'description' => 'janvince.smallgallery::lang.plugin.description',
            'author'      => 'Jan Vince',
            'icon'        => 'icon-camera'
        ];
    }

    public function registerSettings() {

        return [
            'settings' => [
                'label' => 'janvince.smallgallery::lang.plugin.name_short',
                'description' => 'janvince.smallgallery::lang.plugin.description',
                'category' => 'Small plugins',
                'icon' => 'icon-camera',
                'class' => 'JanVince\SmallGallery\Models\Settings',
                'keywords' => 'photo gallery picture slider preview',
                'order' => 991,
                'permissions' => ['janvince.smallgallery.access_settings'],
            ]
        ];
    }

    public function registerNavigation()
    {
        $nav = [
            'smallgallery' => [
                'label'       => 'janvince.smallgallery::lang.plugin.name_short',
                'url'         => Backend::url('janvince/smallgallery/galleries'),
                'icon'        => 'icon-camera',
                'permissions' => ['janvince.smallgallery.*'],
                'order'       => 991,

                'sideMenu' => [

                    'galleries' => [
                        'label'       => 'janvince.smallgallery::lang.common.menu.galleries',
                        'icon'        => 'icon-camera',
                        'url'         => Backend::url('janvince/smallgallery/galleries'),
                        'permissions' => ['janvince.smallgallery.access_galleries']
                    ],
                    'categories' => [
                        'label'       => 'janvince.smallgallery::lang.categories.menu_label',
                        'icon'        => 'icon-sitemap',
                        'url'         => Backend::url('janvince/smallgallery/categories'),
                        'permissions' => ['janvince.smallgallery.access_categories']
                    ],
                    'tags' => [
                        'label'       => 'janvince.smallgallery::lang.tags.menu_label',
                        'icon'        => 'icon-tags',
                        'url'         => Backend::url('janvince/smallgallery/tags'),
                        'permissions' => ['janvince.smallgallery.access_tags']
                    ],
                    'attributes' => [
                        'label'       => 'janvince.smallgallery::lang.attributes.menu_label',
                        'icon'        => 'icon-puzzle-piece',
                        'url'         => Backend::url('janvince/smallgallery/attributes'),
                        'permissions' => ['janvince.smallgallery.access_attributes']
                    ]
                ]

            ]

        ];

        return $nav;

    }

    public function registerPermissions()
    {
        $permissions = [
            'janvince.smallgallery.access_galleries' => [
                'tab'   => 'janvince.smallgallery::lang.permissions.tab_name',
                'label' => 'janvince.smallgallery::lang.permissions.access_galleries'
            ],
            'janvince.smallgallery.access_categories' => [
                'tab'   => 'janvince.smallgallery::lang.permissions.tab_name',
                'label' => 'janvince.smallgallery::lang.permissions.access_categories'
            ],
            'janvince.smallgallery.access_tags' => [
                'tab'   => 'janvince.smallgallery::lang.permissions.tab_name',
                'label' => 'janvince.smallgallery::lang.permissions.access_tags'
            ],
            'janvince.smallgallery.access_attributes' => [
                'tab'   => 'janvince.smallgallery::lang.permissions.tab_name',
                'label' => 'janvince.smallgallery::lang.permissions.access_attributes'
            ],
            'janvince.smallgallery.access_settings' => [
                'tab'   => 'janvince.smallgallery::lang.permissions.tab_name',
                'label' => 'janvince.smallgallery::lang.permissions.access_settings'
            ],

        ];

        return $permissions;

    }

    public function registerComponents()
    {
        return [
            'JanVince\SmallGallery\Components\Galleries' => 'galleries',
            'JanVince\SmallGallery\Components\GalleryDetail' => 'galleryDetail',
            'JanVince\SmallGallery\Components\Categories' => 'categories',
            'JanVince\SmallGallery\Components\CategoryDetail' => 'categoryDetail',
        ];
    }

    /**
    *  Custom list types
    */
    public function registerListColumnTypes()
    {

        $mediaPath = url(Config::get('cms.storage.media.path'));

        return [
            'strong' => function($value) { return '<strong>'. $value . '</strong>'; },
            'text_preview' => function($value) { $content = mb_substr(strip_tags($value), 0, 150); if(mb_strlen($content) > 150) { return ($content . '...'); } else { return $content; } },
            'array_preview' => function($value) { $content = mb_substr(strip_tags( implode(' --- ', $value) ), 0, 150); if(mb_strlen($content) > 150) { return ($content . '...'); } else { return $content; } },
            'switch_icon_star' => function($value) { return '<div class="text-center"><span class="'. ($value==1 ? 'oc-icon-circle text-success' : 'text-muted oc-icon-circle text-draft') .'">' . ($value==1 ? e(trans('janvince.smallcontactform::lang.models.message.columns.new')) : e(trans('janvince.smallcontactform::lang.models.message.columns.read')) ) . '</span></div>'; },
            'switch_extended_input' => function($value) { if($value){return '<span class="list-badge badge-success"><span class="icon-check"></span></span>';} else { return '<span class="list-badge badge-danger"><span class="icon-minus"></span></span>';} },
            'switch_extended' => function($value) { if($value){return '<span class="list-badge badge-success"><span class="icon-check"></span></span>';} else { return '<span class="list-badge badge-danger"><span class="icon-minus"></span></span>';} },
            'attached_images_count' => function($value){ return (count($value) ? count($value) : NULL); },
            'gallery_image_preview' => function($value) {
                $width = Settings::get('galleries_list_preview_width', 50);
                $height = Settings::get('galleries_list_preview_height', 50);

                if($value){ return "<img src='".$value->getThumb($width, $height)."' style='width: auto; height: auto; max-width: ".$width."px; max-height: ".$height."px'>"; }
            },
            'gallery_image_preview_media' => function($value) use ($mediaPath) {
                $width = Settings::get('galleries_list_preview_width', 50);
                $height = Settings::get('galleries_list_preview_height', 50);

                if($value)
                {
                    return "<img src='".$mediaPath.$value."' style='width: auto; height: auto; max-width: ".$width."px; max-height: ".$height."px'>";
                }
            },
            'tags_names' => function($values){ $names = []; if( $values->count() > 0 ) { foreach($values as $value) { $names[] = $value->name; } } return implode(', ', $names); },
        ];
    }

}
