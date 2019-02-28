<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset for Highchart
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class HighchartAsset extends AssetBundle
{
    public $sourcePath = '@app/node_modules/highcharts';
    public $css = [
    ];
    public $js = [
        'highcharts.js',
        'modules/data.js',
        'modules/drilldown.js',
        'modules/exporting.js',
        'modules/export-data.js'
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
