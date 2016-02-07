<?php

use yii\helpers\Html;
use mistim\theme\adminlte\assets\AdminLteAsset;

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $assets AdminLteAsset */
/* @var $publishedUrl string */

if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main_login'; in your controller.
     */
    echo $this->render('main_login', [
        'content' => $content
    ]);
} else {
    $assets = AdminLteAsset::register($this);
    $publishedUrl = $assets->getPublishedUrl();
    ?>

    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render('header', [
            'publishedUrl' => $publishedUrl
        ]) ?>

        <?= $this->render('left', [
            'publishedUrl' => $publishedUrl
        ]) ?>

        <?= $this->render('content', [
            'content'      => $content,
            'publishedUrl' => $publishedUrl,
        ]) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>