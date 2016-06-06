<?php

namespace mistim\theme\adminlte\widgets\form;

use kartik\daterange\DateRangePicker as BaseDateRangePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class DateRangePicker
 * @package app\widgets
 */
class DateRangePicker extends BaseDateRangePicker
{
    public $containerTemplate = <<< HTML
        <span class="input-group-addon">
            <i class="glyphicon glyphicon-calendar"></i>
        </span>
        <span class="form-control text-right">
            <span class="pull-left">
                <span class="range-value">{value}</span>
            </span>
            <b class="caret"></b>
            {input}{error}
        </span>
HTML;

    public $wrapperStyle = '';
    public $inputStyle = '';

    /**
     * Renders the input
     *
     * @return string
     */
    protected function renderInput()
    {
        $this->options = array_merge($this->options, ['style' => $this->inputStyle]);

        if (!$this->hideInput)
        {
            return Html::activeLabel($this->model, $this->attribute, ['class' => 'control-label'])
                . '<div class="input-group drp-container form-drp-input" style="'
                    . $this->wrapperStyle . '">' . $this->getInput('textInput')
                    . Html::submitButton('<span class="glyphicon glyphicon-floppy-save"></span> ' . \Yii::t('admin', 'Export'), ['class' => 'btn btn-info'])
                . '</div>'
                . '<div class="help-block ">' .Html::error($this->model, $this->attribute, ['class' => 'help-block help-block-error']) . '</div>';
        }

        $tag = ArrayHelper::remove($this->containerOptions, 'tag', 'div');
        $content = str_replace('{input}', $this->getInput('hiddenInput'), $this->containerTemplate);
        $content = str_replace('{error}', '<div class="help-block ">' .Html::error($this->model, $this->attribute, ['class' => 'help-block help-block-error']) . '</div>', $content);

        return Html::tag($tag, $content, $this->containerOptions);
    }
}