<?php

namespace WDDA\LaravelUikitForm\Fields;

use Illuminate\Contracts\View\Factory as ViewFactory;

abstract class Field {
    public function view()
    {
        $view = app(ViewFactory::class);
        $view->addNamespace('uikitForm', base_path('vendor/wdda/laravel-uikit-form/src/views'));
        return $view;
    }

    public function setAttributes($attributes)
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

    public function setLabel($label, $name)
    {
        return $this->validateArgument(ucfirst($label), ucfirst(str_replace('_', ' ', $name)));
    }

    public function setId($id, $name)
    {
        if (!empty($id) || $id === false) {
            return $id;
        }

        return $name;
    }

    public function setValue($value)
    {
        return $this->validateArgument($value, '');
    }

    public function setRows($rows)
    {
        return $this->validateArgument($rows);
    }

    public function setDisabled($status = 'not_use'): bool
    {
        if ($status !== 'not_use' && $status) {
            return true;
        }

        return false;
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
