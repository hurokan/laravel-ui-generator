<?php

namespace LaravelUiGeneratorVendor\LaravelUiGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelUiGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-ui-generator';
    }
}
