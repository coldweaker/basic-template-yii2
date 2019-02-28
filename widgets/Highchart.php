<?php

namespace app\widgets;

use yii\helpers\Html;
use yii\bootstrap\Widget;
use app\assets\HighchartAsset;

/**
 * Widget for highchart
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class Highchart extends Widget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        HighchartAsset::register($this->getView());
        return Html::tag('div');
    }
}
