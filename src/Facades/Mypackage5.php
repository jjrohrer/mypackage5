<?php

namespace Jjrohrer\Mypackage5\Facades;

use Illuminate\Support\Facades\Facade;

class Mypackage5 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mypackage5';
    }
}
