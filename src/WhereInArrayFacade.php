<?php

namespace Wahlemedia\WhereInArray;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wahlemedia\WhereInArray\WhereInArray
 */
class WhereInArrayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-where-in-array';
    }
}
