<?php
namespace WDDA\LaravelUikitForm;

use Illuminate\Contracts\View\Factory as ViewFactory;
use WDDA\LaravelUikitForm\Fields\Button;
use WDDA\LaravelUikitForm\Fields\Input;

class LaravelUikitForm
{
    protected $view;
    protected $helper;

    public function __construct()
    {
        $this->view = app(ViewFactory::class);
        $this->view->addNamespace('uikitForm', base_path('vendor/wdda/laravel-uikit-form/src/views'));
        $this->helper = new LaravelUikitFormHelper();
    }

    public static function input($name): Input
    {
        return new Input($name);
    }

    public static function button($name): Button
    {
        return new Button($name);
    }

    public static function textarea($name, $value = false, $label = false, $id = false, $rows = 6, $attributes = false)
    {
        $form = new LaravelUikitForm();

        return $form->view->make('uikitForm::textarea', [
            'name' => $name,
            'label' => $form->helper->label($label, $name),
            'id' => $form->helper->id($id, $name),
            'class' => (is_array($attributes) && key_exists('class', $attributes)),
            'attributes' => $form->helper->attributes($attributes),
            'value' => $form->helper->value($value),
            'rows' => $form->helper->rows($rows),
        ])->render();
    }

    public static function select($name, $options, $value = false, $label = false, $id = false, $attributes = false)
    {
        $form = new LaravelUikitForm();

        return $form->view->make('uikitForm::select', [
            'name' => $name,
            'label' => $form->helper->label($label, $name),
            'id' => $form->helper->id($id, $name),
            'class' => (is_array($attributes) && key_exists('class', $attributes)),
            'attributes' => $form->helper->attributes($attributes),
            'attributesArray' => (!$attributes) ? [] : $attributes,
            'value' => $form->helper->value($value),
            'options' => $options
        ])->render();
    }

    public static function checkbox($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
    {
        $form = new LaravelUikitForm();
        return $form->view->make('uikitForm::checkbox', [
            'name' => $name,
            'label' => $form->helper->label($label, $name),
            'id' => $form->helper->id($id, $name),
            'class' => (is_array($attributes) && key_exists('class', $attributes)),
            'attributes' => $form->helper->attributes($attributes),
            'value' => $form->helper->value($value),
            'checked' => $checked,
        ])->render();
    }

    public static function radio($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
    {
        $form = new LaravelUikitForm();

        return $form->view->make('uikitForm::radio', [
            'name' => $name,
            'label' => $form->helper->label($label, $name),
            'id' => $form->helper->id($id, $name),
            'class' => (is_array($attributes) && key_exists('class', $attributes)),
            'attributes' => $form->helper->attributes($attributes),
            'value' => $form->helper->value($value),
            'checked' => (bool)$checked
        ])->render();
    }
}
