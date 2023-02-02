<?php

namespace WDDA\LaravelUikitForm\Fields;

use Illuminate\Contracts\Container\BindingResolutionException;

class Select extends Field {
    public array $property;

    public function __construct($name)
    {
        $this->property = [
            'name' => $name,
            'id' => null,
            'class' => null,
            'attributes' => null,
            'value' => null,
            'placeholder' => null,
            'attributesArray' => [],
            'options' => []
        ];

        $this->label(null);
    }

    public function label($label): static
    {
        $this->property['label'] = $this->setLabel($label, $this->property['name']);
        return $this;
    }

    public function id($id): static
    {
        $this->property['id'] = $this->setId($id, $this->property['name']);
        return $this;
    }

    public function attributes($attributes): static
    {
        $this->property['attributes'] = $this->setAttributes($attributes);

        $attributes = $this->property['attributes'];
        $this->property['class'] = (is_array($attributes['class']) && key_exists('class', $attributes));
        return $this;
    }

    public function value($value): static
    {
        $this->property['value'] = $this->setValue($value);
        return $this;
    }

    public function placeholder($value): static
    {
        $this->property['placeholder'] = $this->validateArgument($value);
        return $this;
    }

    public function options($options): static
    {
        $this->property['options'] = $options;
        return $this;
    }

    /**
     * @throws BindingResolutionException
     */
    public function render() {
        return $this->view()->make('uikitForm::select', $this->property)->render();
    }
}
