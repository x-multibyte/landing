<?php

namespace XMultibyte\Landing\Facades;

use Illuminate\Support\Facades\Facade;

class Landing extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'landing';
    }
}
