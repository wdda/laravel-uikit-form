<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitRadio extends UikitBaseComponent
{
    protected bool $checked = false;

    public static function create(string $name): self
    {
        return new self($name);
    }

    public function checked(bool $checked): self
    {
        $this->checked = $checked;
        return $this;
    }

    /**
     * @throws Throwable
     */
    public function render(): string
    {
        return view('uikit::radio', [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class,
            'attributes' => $this->attributes,
            'checked' => $this->checked,
        ])->render();
    }
}
