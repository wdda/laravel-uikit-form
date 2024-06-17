<?php

namespace WDDA\LaravelUikitForm\Components\Base;

interface UikitBaseComponentInterface
{
    public function name(string $name): self;

    public function label(string $label): self;

    public function id(?string $id): self;

    public function class(string $class): self;

    public function attributes(array $attributes): self;

    public function value(?string $value): self;
}
