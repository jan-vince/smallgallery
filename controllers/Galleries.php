<?php namespace JanVince\SmallGallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use Lang;
use JanVince\SmallGallery\Models\Gallery;
use JanVince\SmallGallery\Models\Settings;
use Redirect;
use Backend;
use Request;

class Galleries extends Controller
{

    public $implement = [
    'Backend\Behaviors\ListController',
    'Backend\Behaviors\FormController',
    'Backend.Behaviors.RelationController',
    'Backend.Behaviors.ReorderController',
    ];

    public $listConfig = [
        'default' => 'config_list.yaml',
        'flat' => 'config_list_flat.yaml',
    ];

    public $reorderConfig = 'config_reorder.yaml';

    public $formConfig = 'config_form.yaml';

    public $relationConfig = 'config_relation.yaml';

    public function __construct() {

        parent::__construct();

        BackendMenu::setContext('JanVince.SmallGallery', 'smallgallery', 'galleries' );

    }

    public function create_onSaveNew($context = null)
    {
        parent::create_onSave($context);

        return Backend::url('janvince/smallrecords/records/create');

    }

    public function update_onSaveNew($context = null)
    {
        parent::update_onSave($context);

        return Backend::url('janvince/smallrecords/records/create');

    }

    public function onDeleteAttachedImages($recordId, $context = ''){

        $record = Gallery::where('id', $recordId)->first();

        return $record->deleteAttachedImages();

    }

    public function getGallery($galleryId) {

        return Gallery::where('id', $galleryId)->first();

    }

    public function getGalleriesStats($part){

        switch($part){

            case 'galleries_count':
                return Gallery::where('area_id', $this->area_id)->count();
            break;

            case 'galleries_active':
                return Gallery::where('area_id', $this->area_id)->where('active', 1)->count();
            break;

            case 'galleries_hidden':
                return Gallery::where('area_id', $this->area_id)->where('active', 0)->count();
            break;

            case 'galleries_favourite':
                return Gallery::where('area_id', $this->area_id)->where('favourite', 1)->count();
            break;

            case 'galleries_common':
                return Gallery::where('area_id', $this->area_id)->where('favourite', 0)->count();
            break;

            case 'latest_galleries_name':
                return \Db::table('janvince_smallgallery_galleries')
                        ->where('area_id', $this->area_id)
                        ->orderBy('date', 'desc')
                        ->value('name');
            break;

            case 'latest_galleries_date':
                $date = new \DateTime(\Db::table('janvince_smallgallery_galleries')
                    ->where('area_id', $this->area_id)
                    ->orderBy('date', 'desc')
                    ->value('date'));
                return is_object($date) ? $date->format('j.n.Y') : $date;
            break;

            default:
                return NULL;
                break;

        }

    }

}
