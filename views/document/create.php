<?php

/* @var $this \app\components\View */
/* @var $model \app\models\forms\DocumentForm */

$this->title = \Yii::t('app', 'Create Document');
$this->params['breadcrumbs'] = [
    [
        'label' => \Yii::t('app', 'List Document'),
        'url' => ['/document/index'],
    ],
    \Yii::t('app', 'Create')
];
$this->params['side-right'] = [
    ['label' => \Yii::t('app', 'List Document'), 'url' => ['/document/index']],
    ['label' => \Yii::t('app', 'Create Document'), 'url' => ['/document/create']]
];
?>

<!-- Horizontal Form -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= \Yii::t('app', 'Create Document Form') ?></h3>
    </div>
    <!-- /.box-header -->
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
<!-- /.box -->