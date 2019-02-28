<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Tabs;
use app\components\helpers\UserHelper;
use app\components\helpers\ImageHelper;
use app\components\helpers\DateTimeHelper;

/* @var $this \app\components\View */
/* @var $model \app\models\activerecords\User */

$this->title = \Yii::t('app', 'User Profile');
$this->params['breadcrumbs'] = [
    Html::encode($user->username)
];
?>

<?php $this->beginBlock('content-header') ?>
<?= \Yii::t('app', 'User Profile') ?>
<?php $this->endBlock() ?>
<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <?= ImageHelper::render(null, null, [
                    'class' => 'profile-user-img img-responsive img-circle',
                    'alt' => 'User profile picture'
                ]) ?>
                <h3 class="profile-username text-center"><?= Html::encode($user->username) ?></h3>
                <p class="text-muted text-center">
                    <?= Html::encode(Yii::$app->user->rolenames) ?>
                    <br/>
                    <em><?= Html::encode($user->email) ?></em>
                    <br>
                    Status : <?= UserHelper::getBadgeStatus($user->status) ?>
                    <br>
                    Pembaharuan terakhir : <?= DateTimeHelper::shortDateTimeIna($user->updated_at, true) ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <?= Tabs::widget([
                'items' => [
                    [
                        'label' => \Yii::t('app', 'Setting'),
                        'content' => $this->render('change-password', [
                            'model' => $model
                        ])
                    ]
                ]
            ]) ?>
        </div>
    </div>
</div>
