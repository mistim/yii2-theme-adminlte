<?php

namespace app\themes\adminlte\widgets;

/**
 * Class DatePickerTrait
 * @package dosamigos\datepicker
 */
trait DatePickerTrait
{
    /**
     * @var string the language to use
     */
    public $language;

    /**
     * @var array the options for the Bootstrap DatePicker plugin.
     * Please refer to the Bootstrap DatePicker plugin Web page for possible options.
     * @see http://bootstrap-datepicker.readthedocs.org/en/release/options.html
     */
    public $clientOptions = [];

    /**
     * @var array the event handlers for the underlying Bootstrap DatePicker plugin.
     * Please refer to the [DatePicker](http://bootstrap-datepicker.readthedocs.org/en/release/events.html) plugin
     * Web page for possible events.
     */
    public $clientEvents = [];

    /**
     * @var string the size of the input ('lg', 'md', 'sm', 'xs')
     */
    public $size;

    /**
     * @var array HTML attributes to render on the container
     */
    public $containerOptions = [];
}