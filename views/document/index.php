<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use app\widgets\Alert;
use app\widgets\GridView;
use rmrevin\yii\fontawesome\FA;

/* @var $this \app\components\View */
/* @var $dataProvider SqlDataProvider */
/* @var $modelSearch \app\models\search\DocumentSearch */

$this->title = \Yii::t('app', 'List Document');
$this->params['breadcrumbs'] = [
    \Yii::t('app', 'List Document')
];
$this->params['side-right'] = [
    ['label' => \Yii::t('app', 'List Document'), 'url' => ['document/index']],
    ['label' => \Yii::t('app', 'Create Document'), 'url' => ['document/create']]
];
?>

<?= $this->render('/_header', ['title' => 'Document']) ?>

<!-- Horizontal Form -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= \Yii::t('app', 'List Document') ?></h3>
    </div>
    <div class="box-header">
    </div>
    <?php Pjax::begin(['id' => 'list-document']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
            [
                'class' => 'app\widgets\ActionColumn',
                'template' => '{update}'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<!-- /.box -->
