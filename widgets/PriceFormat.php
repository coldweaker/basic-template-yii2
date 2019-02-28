<?php

namespace app\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\InputWidget;
use app\assets\PriceFormatAsset;

/**
 * Widget for price format
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class PriceFormat extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        PriceFormatAsset::register($this->getView());
        $defaultClientOptions = [
            'prefix' => '',
            'centsSeparator' => ',',
            'thousandsSeparator' => '.',
            'centsLimit' => 2
        ];
        $this->clientOptions = array_merge($defaultClientOptions, $this->clientOptions);
        $this->registerPlugin('priceFormat');
        return $this->renderInputHtml('text');
    }
}
