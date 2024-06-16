<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitTextarea extends UikitBaseComponent
{
    protected int $rows = 3;

    public static function create(): self
    {
        return new self();
    }

    public function rows($rows): self
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @throws Throwable
     */
    public function render(): string
    {
        return view('uikit::textarea', [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class,
            'attributes' => $this->attributes,
            'rows' => $this->rows
        ])->render();
    }
}
