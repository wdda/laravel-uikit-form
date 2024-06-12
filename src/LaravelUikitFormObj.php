<?php
namespace WDDA\LaravelUikitForm;

use Illuminate\Contracts\View\Factory as ViewFactory;

class LaravelUikitFormObj
{
    public __construct(protected ViewFactory $view, protected LaravelUikitFormHelper $helper) {
        $this->view->addNamespace('uikitForm', base_path('vendor/wdda/laravel-uikit-form/src/views'));
    }

    public function simpleInput() {
        
    }
}