<?php

namespace app\widgets;

use yii\grid\GridView as BaseGridView;

/**
 * Extends class GridView
 *
 * @author Hendi Andriansah <coldweaker@gmail.com>
 */
class GridView extends BaseGridView
{
    public $showSerialColumn = true;
    public $dataColumnClass = '\app\widgets\DataColumn';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->options = ['class' => 'table-responsive no-padding'];
        $this->tableOptions = ['class' => 'table table-hover table-bordered'];
        $this->layout = "<div class='box-body'>{summary}\n<br />{items}</div><div class='box-footer'>{pager}</div>";
        $this->showOnEmpty = true;

        if ($this->showSerialColumn) {
            array_unshift($this->columns, ['class' => 'yii\grid\SerialColumn', 'header' => \Yii::t('app', 'No')]);
        }
        parent::init();
    }
}
