<?php

namespace WDDA\LaravelUikitForm\Fields;

use Illuminate\Contracts\Container\BindingResolutionException;

class Button extends Field {
    public array $property;

    public function __construct($name)
    {
        $this->property = [
            'name' => $name,
            'type' => 'submit'
        ];
    }

    /**
     * @throws BindingResolutionException
     */
    public function render() {
        return $this->view()->make('uikitForm::button', $this->property)->render();
    }
}
