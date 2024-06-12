<?php
namespace WDDA\LaravelUikitForm\Components;

class UikitSelect extends UikitComponent
{
    protected $options = [];

    public function options($options)
    {
        $this->options = $options;
        return $this;
    }

    public function render()
    {
        return $this->view->make('uikitForm::select', [
            'name' => $this->name,
            'label' => $this->helper->label($this->label, $this->name),
            'id' => $this->helper->id($this->id, $this->name),
            'class' => isset($this->attributes['class']) ? $this->attributes['class'] : 'uk-select',
            'attributes' => $this->helper->attributes($this->attributes),
            'attributesArray' => $this->attributes,
            'value' => $this->helper->value($this->value),
            'options' => $this->options
        ])->render();
    }
}