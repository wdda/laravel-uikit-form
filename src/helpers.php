<?php

use WDDA\LaravelUikitForm\Fields\Button;
use WDDA\LaravelUikitForm\Fields\Input;
use WDDA\LaravelUikitForm\LaravelUikitForm;

function formInput($name): Input
{
    return LaravelUikitForm::input($name);
}

function formButton($name): Button
{
    return LaravelUikitForm::button($name);
}

/*function formTextarea($name, $value = false, $label = false, $id = false, $rows = 6, $attributes = false)
{
    return LaravelUikitForm::textarea($name, $value, $label, $id, $rows, $attributes);
}

function formSelect($name, $options, $value = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::select($name, $options, $value, $label, $id, $attributes);
}

function formCheckbox($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::checkbox($name, $value, $checked, $label, $id, $attributes);
}

function formRadio($name, $value = false, $checked = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::radio($name, $value, $checked, $label, $id, $attributes);
}*/
