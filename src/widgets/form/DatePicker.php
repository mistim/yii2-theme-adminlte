<?php

namespace app\themes\adminlte\widgets\form;

use app\themes\adminlte\widgets\DatePicker as DatePickerBase;
use yii\helpers\Html;

/**
 * Class DatePicker
 * @package app\themes\adminlte\widgets\form
 */
class DatePicker extends DatePickerBase
{
    /**
     * @var string the addon markup if you wish to display the input as a component. If you don't wish to render as a
     * component then set it to null or false.
     */
    public $addon = '<i class="glyphicon glyphicon-calendar"></i>';

    /**
     * @var string
     */
    public $error = '<p class="help-block help-block-error"></p>';

    /**
     * @var string the template to render the input.
     */
    public $template = '{addon}{input}';

    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Html::addCssClass($this->options, 'form-control');
        Html::addCssClass($this->containerOptions, 'input-group date');
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerClientScript();

        $input = $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $this->options)
            : Html::textInput($this->name, $this->value, $this->options);

        $error = substr_count($this->template, '{error}') > 0 ? $this->error : '';

        if ($this->addon)
        {
            $addon = Html::tag('span', $this->addon, ['class' => 'input-group-addon']);
            $input = strtr($this->template, ['{input}' => $input, '{addon}' => $addon, '{error}' => '']);
            $input = Html::tag('div', $input, $this->containerOptions) . $error;
        }

        return $input;
    }
}
