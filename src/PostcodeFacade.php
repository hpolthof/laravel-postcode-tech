<?php


namespace Hpolthof\LaravelPostcodeTech;


use Illuminate\Support\Facades\Facade;

class PostcodeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postcode.tech';
    }
}
