<?php

use app\widgets\Alert;
use yii\widgets\Pjax;
use yii\helpers\Html;
use app\widgets\GridView;
use app\widgets\DatePicker;
use app\models\activerecords\AuditTrail;
use app\components\helpers\ArrayHelper;
use app\components\helpers\DateTimeHelper;

/* @var $this \app\components\View */

$this->title = \Yii::t('app', 'List Audit Trail');
$this->params['breadcrumbs'] = [
    \Yii::t('app', 'List Audit Trail')
];
$this->params['side-right'] = [
    ['label' => \Yii::t('app', 'List Audit Trail'), 'url' => ['audit-trail/index']],
];
?>

<?= $this->render('/_header', ['title' => 'Audit Trail']) ?>

<!-- Horizontal Form -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= \Yii::t('app', 'List Audit Trail') ?></h3>
    </div>
    <div class="box-header">
        <?= Alert::widget([]); ?>
    </div>
    <?php Pjax::begin(['id' => 'list-audit-trail']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'renderExtendRowContent' => function($data) use ($searchModel) {
            return $searchModel->renderDataValue($data['data']);
        },
        'rowOptions' => function($model, $key, $index, $grid) {
            return ['class' => 'row-parent'];
        },
        'columns' => [
            [
                'attribute' => 'model_type',
                'content' => function($data) {
                    return ArrayHelper::getLastString($data['model_type'], "\\");
                },
            ],
            [
                'attribute' => 'foreign_pk',
                'content' => function($data) {
                    return ArrayHelper::getDecodedValue($data['foreign_pk']);
                },
            ],
            'username',
            [
                'attribute' => 'type',
                'filter' => AuditTrail::getListType(),
            ],
            [
                'attribute' => 'happened_date',
                'value' => function($data) {
                    return DateTimeHelper::shortDateTimeIna($data['happened_at'], true);
                },
                'filter' => DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'happened_date',
                    'options' => ['class' => 'form-control'],
                ]),
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<!-- /.box -->
<?php
$script = <<< JS
$(function() {
    toggleExtendRow();
    function toggleExtendRow() {
        $(".extend-row").hide();
        $(".row-parent").click(function() {
            var key = $(this).data("key");
            console.log(key);
            $("#extend-"+key).toggle();
        });
    }

    $(document).on('pjax:complete', function () {
        toggleExtendRow();
    });
});
JS;
$this->registerJs($script, \app\components\View::POS_READY);