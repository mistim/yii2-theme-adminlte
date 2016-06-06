<?php

namespace mistim\theme\adminlte\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Class BootboxAsset
 * @package app\assets
 */
class BootboxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/bootbox';

    public $js = [
        'bootbox.js',
    ];

    /**
     * @inheritdoc
     */
    public static function overrideSystemConfirm()
    {
        Yii::$app->view->registerJs('
            yii.confirm = function(message, ok, cancel) {
                bootbox.confirm(message, function(result) {
                    if (result) { !ok || ok(); } else { !cancel || cancel(); }
                });
            }
        ');
    }
}