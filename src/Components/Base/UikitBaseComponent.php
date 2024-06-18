<?php

namespace WDDA\LaravelUikitForm\Components\Base;

abstract class UikitBaseComponent implements UikitBaseComponentInterface
{
    protected ?string $id = null;
    protected ?string $value = null;
    protected ?string $label = null;
    protected ?string $class = null;
    protected string $attributes = '';

    public function __construct(protected string $name)
    {
    }

    abstract public function render(): string;

    public function __toString(): string
    {
        return $this->render();
    }

    public function id(?string $id): self
    {
        $this->id = $id ?? $this->name;
        return $this;
    }

    public function value(?string $value): self
    {
        $this->value = $value;
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
        $this->attributes = implode(' ', array_map(
            function ($key, $value) {
                if (is_numeric($key)) {
                    return $value;
                }

                return sprintf('%s=%s', $key, htmlspecialchars($value, ENT_QUOTES));
            },
            array_keys($attributes),
            $attributes
        ));

        return $this;
    }
}
