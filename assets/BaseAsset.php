<?php
namespace app\assets;

use dmstr\web\AdminLteAsset;

/**
 * Extends from AdminLte AssetBundle
 *
 * @since 0.1
 */
class BaseAsset extends AdminLteAsset
{
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'app\assets\IoniconAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
