<?php
namespace WDDA\LaravelUikitForm\Components;

use Illuminate\Contracts\View\Factory as ViewFactory;
use WDDA\LaravelUikitForm\LaravelUikitFormHelper as Helper;

abstract class UikitComponent
{
    protected $view;
    protected $helper;
    protected $name;
    protected $value = false;
    protected $checked = false;
    protected $label = false;
    protected $id = false;
    protected $attributes = [];

    public function __construct()
    {
        $this->view = app(ViewFactory::class);
        $this->view->addNamespace('uikitForm', base_path('vendor/wdda/laravel-uikit-form/src/views'));
        $this->helper = new Helper();
    }

    public function __toString()
    {
        return $this->render();
    }

    public static function create()
    {
        return new static();
    }

    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function value($value)
    {
        $this->value = $value;
        return $this;
    }

    public function checked($checked)
    {
        $this->checked = $checked;
        return $this;
    }

    public function label($label)
    {
        $this->label = $label;
        return $this;
    }

    public function id($id)
    {
        $this->id = $id;
        return $this;
    }

    public function attributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function class($class)
    {
        $this->attributes['class'] = $class;
        return $this;
    }

    abstract public function render();
}
