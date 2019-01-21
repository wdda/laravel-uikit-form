<?php
namespace WDDA\LaravelUikitForm;

class LaravelUikitFormHelper
{
    public function attributes($attributes)
    {
        $customAttributes = '';
        if (!empty($attributes)) {
            if(!is_array($attributes)) {
                $customAttributes = $attributes;
            } else {
                foreach ($attributes as $key => $attribute) {
                    if (is_numeric($key)) {
                        $customAttributes .= ' ' . $attribute;
                        continue;
                    }

                    $customAttributes .= ' ' . $key . '="' . $attribute . '"';
                }
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
        return $this->validateArgument($rows);
    }

    public function validateArgument($argument, $default = null)
    {
        if (!empty($argument) || $argument === 0) {
            if ($argument || $argument === 0) {
                return $argument;
            }
        }

        return $default;
    }
}
