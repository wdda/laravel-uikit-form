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
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/helpers.php';

        $this->app->bind('Form', function ($app) {
            return new LaravelUikitForm();
        });
    }
}
