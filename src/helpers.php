<?php

use WDDA\LaravelUikitForm\Components\{UikitCheckbox, UikitInput, UikitRadio, UikitSelect, UikitTextarea};

if (!function_exists('formRadio')) {
    function formRadio(): UikitRadio
    {
        return UikitRadio::create();
    }
}

if (!function_exists('formInput')) {
    function formInput()
    {
        return UikitInput::create();
    }
}

if (!function_exists('formTextarea')) {
    function formTextarea()
    {
        return UikitTextarea::create();
    }
}

if (!function_exists('formSelect')) {
    function formSelect()
    {
        return UikitSelect::create();
    }
}

if (!function_exists('formCheckbox')) {
    function formCheckbox()
    {
        return UikitCheckbox::create();
    }
}
