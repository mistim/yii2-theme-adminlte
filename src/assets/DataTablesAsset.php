<?php

namespace mistim\theme\adminlte\assets;

use yii\web\AssetBundle;

/**
 * Class DataTablesAsset
 * @package mistim\theme\adminlte\assets
 */
class DataTablesAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';

    /**
     * @var array
     */
    public $css = [
        'datatables/dataTables.bootstrap.css'
    ];

    /**
     * @var array
     */
    public $depends = [
        'mistim\theme\adminlte\assets\AdminLteAsset'
    ];
}
