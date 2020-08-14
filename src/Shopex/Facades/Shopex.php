<?php
namespace Shopex\Facades;

use Illuminate\Support\Facades\Facade;

class Shopex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shopex\Shopex::class;
    }
}
