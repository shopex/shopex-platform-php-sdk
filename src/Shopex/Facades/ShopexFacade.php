<?php
namespace Shopex\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShopexFacade
 * @method static \Shopex\Components\Client client()
 * @package Shopex\Facades
 */
class ShopexFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shopex\Shopex::class;
    }
}
