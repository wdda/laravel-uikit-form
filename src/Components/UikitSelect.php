<?php
namespace WDDA\LaravelUikitForm\Components;

use Throwable;
use WDDA\LaravelUikitForm\Components\Base\UikitBaseComponent;

class UikitSelect extends UikitBaseComponent
{
    protected array $options;
    protected ?array $attributesArray = [];

    public static function create(): self
    {
        return new self();
    }

    public function options(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    public function attributesArray(?array $attributesArray = []): self
    {
        // (!$attributes) ? [] : $attributes

        $this->attributesArray = $attributesArray;
        return $this;
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
