<?php

namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitSelect extends UikitBaseComponent
{
    protected array $options = [];
    protected array $attributesArray = [];

    public static function create(): self
    {
        return new self();
    }

    public function options(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @throws Throwable
     */
    public function render(): string
    {
        return view('uikit::select', [
            'id' => $this->id,
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'class' => $this->class,
            'attributes' => $this->attributes,
            'attributesArray' => $this->attributesArray,
            'options' => $this->options,
        ])->render();
    }
}
