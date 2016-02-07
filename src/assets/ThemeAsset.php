<?php

namespace mistim\theme\adminlte\assets;

use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@app/themes/site/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/alms/font-awesome.min.css',
        'css/alms/ionicons.min.css',
        //'css/select2/select2.css',
        'css/alms/AdminLTE.min.css',
        'css/alms/skins/_all-skins.min.css',
        //'css/pace/pace.min.css',
        'css/sticky-footer.css',
        'css/flaticon.css',
        //'css/main.css',
        //'css/for_redactor.css',
    ];

    public $js = [
        'js/ie-emulation-modes-warning.js',
        //'js/plugins/pace/pace.js',
        'js/jstz-1.0.4.min.js',
        //'js/main.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
