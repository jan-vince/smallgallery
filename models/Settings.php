<?php

namespace JanVince\SmallGallery\Models;

use Model;
use Lang;
use JanVince\SmallGallery\Models\Area;

class Settings extends Model
{

    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [];

    public $settingsCode = 'janvince_smallgallery_settings';

    public $settingsFields = 'fields.yaml';

    protected $jsonable = [];

}
