<?php

namespace mistim\theme\adminlte\assets;

use yii\web\AssetBundle;

/**
 * Class DatePickerAsset
 * @package mistim\theme\adminlte\assets
 */
class DatePickerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';

    /**
     * @var array
     */
    public $css = [
        'datepicker/datepicker3.css'
    ];

    /**
     * @var array
     */
    public $js = [
        'datepicker/bootstrap-datepicker.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'mistim\theme\adminlte\assets\AdminLteAsset'
    ];

    /* public function init() {
         $this->css[] = YII_DEBUG ? 'css/bootstrap-datepicker3.css' : 'css/bootstrap-datepicker3.min.css';
         $this->js[] = YII_DEBUG ? 'js/bootstrap-datepicker.js' : 'js/bootstrap-datepicker.min.js';
     }*/
}