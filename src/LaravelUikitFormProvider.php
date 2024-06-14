<?php

namespace WDDA\LaravelUikitForm;

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
        $this->loadViewsFrom(__DIR__.'libraries/laravel-uikit-form/src/views', 'uikit');
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
