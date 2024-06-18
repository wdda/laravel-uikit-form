<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitInput extends UikitBaseComponent
{
    public static function create(string $name): self
    {
        return new self($name);
    }

    /**
     * @throws Throwable
     */
    public function render(): string
    {
        return view('uikit::input', [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class,
            'attributes' => $this->attributes,
        ])->render();
    }
}
