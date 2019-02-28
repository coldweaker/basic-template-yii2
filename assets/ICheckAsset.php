<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * ICheck AssetBundle
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/iCheck';
    public $css = [
        'all.css',
    ];
    public $js = [
        'icheck.min.js'
    ];
    public $depends = [
        'app\assets\AppAsset'
    ];
}
