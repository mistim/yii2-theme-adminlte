<?php

namespace mistim\theme\adminlte\widgets;

use yii\bootstrap\Widget;

/**
 * Class Alert
 * @package mistim\theme\adminlte\widgets
 */
class Alert extends Widget
{
    /**
     * @var array
     */
    public $alertTypes = [
        'error'   => 'danger',
        'danger'  => 'danger',
        'success' => 'success',
        'info'    => 'info',
        'warning' => 'warning'
    ];

    /**
     * @var array the options for rendering the close button tag.
     */
    public $closeButton = [];

    /**
     * @throws \Exception
     */
    public function init()
    {
        parent::init();

        $session = \Yii::$app->getSession();
        $flashes = $session->getAllFlashes();
        $appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';

        foreach ($flashes as $type => $message) {
            /* initialize css class for each alert box */
            $this->options['class'] = 'alert-' . $this->alertTypes[$type] . $appendCss;

            /* assign unique id to each alert box */
            $this->options['id'] = $this->getId() . '-' . $type;

            echo \mistim\theme\adminlte\widgets\covers\Alert::widget([
                    'type'        => $type,
                    'body'        => $message,
                    'closeButton' => $this->closeButton,
                    'options'     => $this->options
                ]);

            $session->removeFlash($type);
        }
    }
}