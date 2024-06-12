<?php
namespace WDDA\LaravelUikitForm\Components;

class UikitInput extends UikitComponent
{
    public function render()
    {
        return $this->view->make('uikitForm::input', [
            'name' => $this->name,
            'label' => $this->helper->label($this->label, $this->name),
            'id' => $this->helper->id($this->id, $this->name),
            'class' => isset($this->attributes['class']) ? $this->attributes['class'] : null,
            'attributes' => $this->helper->attributes($this->attributes),
            'value' => $this->helper->value($this->value)
        ])->render();
    }
}
