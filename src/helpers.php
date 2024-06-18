<?php

use WDDA\LaravelUikitForm\Components\{UikitCheckbox, UikitInput, UikitRadio, UikitSelect, UikitTextarea};

if (!function_exists('formRadio')) {
    function formRadio(string $name): UikitRadio
    {
        return UikitRadio::create($name);
    }
}

if (!function_exists('formInput')) {
    function formInput(string $name)
    {
        return UikitInput::create($name);
    }
}

if (!function_exists('formTextarea')) {
    function formTextarea(string $name)
    {
        return UikitTextarea::create($name);
    }
}

if (!function_exists('formSelect')) {
    function formSelect(string $name)
    {
        return UikitSelect::create($name);
    }
}

if (!function_exists('formCheckbox')) {
    function formCheckbox(string $name)
    {
        return UikitCheckbox::create($name);
    }
}
