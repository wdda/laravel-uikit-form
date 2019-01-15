<?php
use WDDA\LaravelUikitForm\LaravelUikitForm;

function formInput($name, $value = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::input($name, $value, $label, $id, $attributes);
}

function formTextarea($name, $value = false, $label = false, $id = false, $rows = false, $attributes = false)
{
    return LaravelUikitForm::textarea($name, $value, $label, $id, $rows, $attributes);
}

function formSelect($name, $options, $value = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::select($name, $options, $value, $label, $id, $attributes);
}

function formCheckbox($name, $value = false, $label = false, $id = false, $attributes = false)
{
    return LaravelUikitForm::checkbox($name, $value, $label, $id, $attributes);
}
