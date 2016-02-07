<?php

namespace mistim\theme\adminlte;

use Yii;

/**
 * Class Theme
 * @package mistim\theme\adminlte
 */
class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
    /*public $pathMap = [
        '@app/views' => '@app/themes/site/views',
        '@app/modules' => '@app/themes/site/modules'
    ];*/

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        /*Yii::$container->set('yii\grid\CheckboxColumn', [
            'checkboxOptions' => [
                'class' => 'simple'
            ]
        ]);*/
    }
}
