<?php
use app\assets\AppAsset;
use app\assets\BaseAsset;
use yii\helpers\Html;

/* @var $this \app\components\View */
/* @var $content string */

AppAsset::register($this);
BaseAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?= $this->registerLinkTag([
        'rel' => 'stylesheet',
        'href' => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
    ]) ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<?php $this->beginBody() ?>
<div class="wrapper">

    <?= $this->render(
        'header',
        ['directoryAsset' => $directoryAsset]
    ) ?>

    <?= $this->render(
        'left',
        ['directoryAsset' => $directoryAsset]
    )
    ?>

    <div class="content-wrapper">
        <section class="content-header">
        </section>
        <section class="content">
            <?= $content ?>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
