<?php

namespace denis909\themes\tabler;

use yii\web\View;

class Assets extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/npm-asset/tabler-ui/dist';
    
    public $css = [
        ['assets/css/dashboard.css', 'position' => View::POS_HEAD],
        ['assets/plugins/charts-c3/plugin.css', 'position' => View::POS_HEAD],
        ['assets/plugins/maps-google/plugin.css', 'position' => View::POS_HEAD]
    ];
    
    public $js = [
        ['assets/js/dashboard.js', 'position' => View::POS_HEAD],
        ['assets/plugins/charts-c3/plugin.js', 'position' => View::POS_HEAD],
        ['assets/plugins/maps-google/plugin.js', 'position' => View::POS_HEAD],
        ['assets/plugins/input-mask/plugin.js', 'position' => View::POS_HEAD],
        ['assets/plugins/datatables/plugin.js', 'position' => View::POS_HEAD]
    ];
    
    public $depends = [
        //'yii\web\JqueryAsset',
        //'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap4\BootstrapPluginAsset'
    ];

}