<?php
return [
    "appKey" => env("SHOPEX_PLATFORM_APP_KEY", ""),
    "appSecret" => env("SHOPEX_PLATFORM_APP_SECRET", ""),
    //是否开启debug
    "debug" => env("SHOPEX_PLATFORM_SDK_DEBUG", false),
    //是否是开发环境
    "isDev" => env("SHOPEX_PLATFORM_IS_DEV", false),
];
