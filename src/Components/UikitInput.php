<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitInput extends UikitBaseComponent
{
    public static function create(): self
    {
        return new self();
    }

    /**
     * @throws Throwable
     */
    public function render(): string
    {
        return $this->view->make('uikit::radio', [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class,
            'attributes' => $this->attributes,
        ])->render();
    }
}
