<?php


namespace Shopex;


use Shopex\Components\Sdk;

class Shopex
{
    public static function sdk(){
        return new Sdk(config("shopex_sdk.appKey"),config("shopex_sdk.appSecret"));
    }
}
