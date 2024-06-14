<?php

namespace WDDA\LaravelUikitForm\Components\Base;

use Illuminate\Contracts\View\Factory as ViewFactory;

abstract class UikitBaseComponent implements UikitBaseComponentInterface
{
    protected ViewFactory $view;

    protected string $name;
    protected ?string $id = null;
    protected ?string $value = null;
    protected ?string $label = null;
    protected ?string $class = null;
    protected ?string $attributes = '';

    public function __construct()
    {
        $this->view = app(ViewFactory::class);
        $this->view->addNamespace('uikit', base_path('vendor/wdda/laravel-uikit-form/src/views'));
    }

    abstract public function render(): string;

    public function __toString(): string
    {
        return $this->render();
    }

    public function name(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function id(?string $id): self
    {
        $this->id = is_null($id) ? $this->name : $id;
        return $this;
    }

    public function value(?string $value): self
    {
        $this->value = $this->validateArgument($value);
        return $this;
    }

    public function label(?string $label): self
    {
        $this->label = is_null($label)
            ? ucfirst(str_replace('_', ' ', $this->name))
            : ucfirst($label);

        return $this;
    }

    public function class(?string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function attributes(array $attributes): self
    {
        foreach ($attributes as $key => $value) {
            if (is_numeric($key)) {
                $this->attributes .= $value . ' ';
            } else {
                $this->attributes .= $key . ($value ? '="' . htmlspecialchars($value, ENT_QUOTES) . '" ' : '');
            }
        }

        $this->attributes = trim($this->attributes);
        return $this;
    }

    public function rows($rows)
    {
        dump(__CLASS__, __METHOD__);
        dd(get_debug_type($rows));
        return $this->validateArgument($rows);
    }

    private function validateArgument($argument): string
    {
        return empty($argument) ? '' : $argument;
    }
}
