<?php
namespace WDDA\LaravelUikitForm\Components;

class UikitRadio extends UikitComponent
{
    public function render()
    {
        return $this->view->make('uikitForm::radio', [
            'name' => $this->name,
            'label' => $this->helper->label($this->label, $this->name),
            'id' => $this->helper->id($this->id, $this->name),
            'class' => isset($this->attributes['class']) ? $this->attributes['class'] : null,
            'attributes' => $this->helper->attributes($this->attributes),
            'value' => $this->helper->value($this->value),
            'checked' => (bool)$this->checked
        ])->render();
    }
}
