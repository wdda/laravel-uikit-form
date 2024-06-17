<?php

namespace WDDA\LaravelUikitForm;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LaravelUikitFormProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::addNamespace('uikit', base_path('vendor/wdda/laravel-uikit-form/src/views'));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        require_once __DIR__ . '/helpers.php';
    }
}
