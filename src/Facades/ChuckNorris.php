<?php

namespace Masaruedo\Jokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNorris extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jokes';
    }
}
