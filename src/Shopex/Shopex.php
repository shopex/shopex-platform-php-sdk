<?php


namespace Shopex;


use Shopex\Components\Client;

class Shopex
{
    public static function client()
    {
        return new Client(config("shopex_sdk.appKey"), config("shopex_sdk.appSecret"), config("shopex_sdk.isDev"));
    }
}
