<?php
// use WDDA\LaravelUikitForm\LaravelUikitForm;

use WDDA\LaravelUikitForm\Components\UikitRadio;
use WDDA\LaravelUikitForm\Components\UikitInput;
use WDDA\LaravelUikitForm\Components\UikitTextarea;
use WDDA\LaravelUikitForm\Components\UikitSelect;
use WDDA\LaravelUikitForm\Components\UikitCheckbox;

// function formInput($name, $value = false, $label = false, $id = false, $attributes = false)
// {
//     return LaravelUikitForm::input($name, $value, $label, $id, $attributes);
// }

// function formTextarea($name, $value = false, $label = false, $id = false, $rows = 6, $attributes = false)
// {
//     return LaravelUikitForm::textarea($name, $value, $label, $id, $rows, $attributes);
// }

// function formSelect($name, $options, $value = false, $label = false, $id = false, $attributes = false)
// {
//     return LaravelUikitForm::select($name, $options, $value, $label, $id, $attributes);
// }

// function formCheckbox($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
// {
//     return LaravelUikitForm::checkbox($name, $value, $checked, $label, $id, $attributes);
// }

// function formRadio($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
// {
//     return LaravelUikitForm::radio($name, $value, $checked, $label, $id, $attributes);
// }

if (! function_exists('radio')) {
    function radio() {
        return UikitRadio::create();
    }
}

if (! function_exists('input')) {
    function input() {
        return UikitInput::create();
    }
}

if (! function_exists('textarea')) {
    function textarea() {
        return UikitTextarea::create();
    }
}

if (! function_exists('select')) {
    function select() {
        return UikitSelect::create();
    }
}

if (! function_exists('checkbox')) {
    function checkbox() {
        return UikitCheckbox::create();
    }
}