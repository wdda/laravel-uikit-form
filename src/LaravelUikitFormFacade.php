<?php namespace WDDA\LaravelUikitForm;

use Illuminate\Support\Facades\Facade;

class LaravelUikitFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Form';
    }

}
