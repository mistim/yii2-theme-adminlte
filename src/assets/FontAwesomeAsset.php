<?php

namespace mistim\theme\adminlte\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package mistim\theme\adminlte\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/alms/font-awesome.min.css',
    ];

    public $js = [];
}
