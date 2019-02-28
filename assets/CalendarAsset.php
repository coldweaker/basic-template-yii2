<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Calendar AssetBundle
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class CalendarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/fullcalendar/dist';
    public $css = [
        'fullcalendar.min.css',
        ['fullcalendar.print.min.css', 'media' => 'print'],
    ];
    public $js = [
        'fullcalendar.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\assets\JQueryUIAsset',
        'app\assets\SlimScrollAsset',
        'app\assets\FastClickAsset',
        'app\assets\BaseAsset',
        'app\assets\MomentAsset',
    ];
}
