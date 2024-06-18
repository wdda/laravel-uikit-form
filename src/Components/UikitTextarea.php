<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitTextarea extends UikitBaseComponent
{
    protected int $rows = 6;

    public static function create(string $name): self
    {
        return new self($name);
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
