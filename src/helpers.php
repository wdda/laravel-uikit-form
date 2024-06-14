<?php

use WDDA\LaravelUikitForm\Components\{UikitCheckbox, UikitInput, UikitRadio, UikitSelect, UikitTextarea};

if (!function_exists('radio')) {
    function radio(): UikitRadio
    {
        return UikitRadio::create();
    }
}

if (!function_exists('input')) {
    function input()
    {
        return UikitInput::create();
    }
}

if (!function_exists('textarea')) {
    function textarea()
    {
        return UikitTextarea::create();
    }
}

if (!function_exists('select')) {
    function select()
    {
        return UikitSelect::create();
    }
}

if (!function_exists('checkbox')) {
    function checkbox()
    {
        return UikitCheckbox::create();
    }
}
