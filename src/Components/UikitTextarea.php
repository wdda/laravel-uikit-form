<?php
namespace WDDA\LaravelUikitForm\Components;

class UikitTextarea extends UikitComponent
{
    protected $rows = 3; // значение по умолчанию

    public function rows($rows)
    {
        $this->rows = $rows;
        return $this;
    }

    public function render()
    {
        return $this->view->make('uikitForm::textarea', [
            'name' => $this->name,
            'label' => $this->helper->label($this->label, $this->name),
            'id' => $this->helper->id($this->id, $this->name),
            'class' => isset($this->attributes['class']) ? $this->attributes['class'] : null,
            'attributes' => $this->helper->attributes($this->attributes),
            'value' => $this->helper->value($this->value),
            'rows' => $this->rows
        ])->render();
    }
}
