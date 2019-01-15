<?php
namespace WDDA\LaravelUikitForm;

class LaravelUikitFormHelper
{
    public function attributes($attributes)
    {
        $customAttributes = '';
        if (!empty($attributes)) {
            foreach ($attributes as $key => $attribute) {
                $customAttributes .= ' ' . $key . '="' . $attribute . '"';
            }
        }

        return $customAttributes;
    }

    public function label($label, $name)
    {
        return $this->validateArgument(ucfirst(strtolower($label)), ucfirst(strtolower(str_replace('_', ' ', $name))));
    }

    public function id($id, $name)
    {
        if (!empty($id) || $id === false) {
            return $id;
        }

        return $name;
    }

    public function value($value)
    {
        return $this->validateArgument($value, '');
    }

    public function rows($rows)
    {
        return $this->validateArgument($rows, 6);
    }

    public function validateArgument($argument, $default = null)
    {
        if (!empty($argument)) {
            if ($argument) {
                return $argument;
            }
        }

        return $default;
    }
}
