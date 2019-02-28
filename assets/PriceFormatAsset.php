<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Asset for PriceFormat jquery
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class PriceFormatAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/flaviosilveira/jquery.priceformat.min.js'
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
