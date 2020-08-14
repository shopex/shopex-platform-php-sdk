# Shopex platform-php-sdk

## 1. 在开放平台上获取appKey 与 appSecret

## 2. 安装开放平台sdk
```shell script
composer require shopex/shopex-platform-php-sdk

# 如果使用laravel or lumen框架
    php artisan vendor:publish --tag=shopex-platform-sdk-config
    php artisan config:clear
    # 修改 config/shopex_sdk.php 在env中添加对应参数
```

## 3. 代码使用示例
```php
<?php
# 1. 非laravel or lumen 框架
    $app_key = '####';
    $app_secret = '####';
    $is_dev = false;
    $sdk = new \Shopex\Components\Client($app_key,$app_secret,$is_dev);
# 2. laravel or lumen 框架 配置按照 shopex_sdk.php中的key在 .env 文件中配置好
    $sdk = \Shopex\Facades\ShopexFacade::client();

$path = "Rjletw";
$method = "delivery.order.create";
$params['create_time'] = '2020-08-10 17:15:23';
$params['has_invoice'] = 0;
$params['is_agent_payment'] = 0;
$params['item_list'] = json_encode([["item_id"=>12312,"item_name"=>"测试商品","num"=>1,"price"=>12300,"total_item_fee"=>12300]]);
$params['items_num'] = 1;
$params['notify_url'] = "http://shopex.cn";
$params['order_id'] = "abc13136";
$params['order_type'] = "normal";
$params['shop_id'] = "test001";
$params['pay_status'] = "PAY_FINISH";
$params['pay_type'] = "Online";
$params['platform'] = "FENGNIAO";
$params['position_source'] = "amap";
$params['receiver_address'] = "宜山路";
$params['receiver_lat'] = "31.175366";
$params['receiver_lng'] = "121.419164";
$params['receiver_name'] = "张三";
$params['receiver_phone'] = "13111111111";
$params['total_fee'] = 12300;
$params['total_pay_fee'] = 12300;
$params['user_id'] = "1054182434";
$params['require_receive_time'] = '2020-08-12 18:15:23';

$result = $sdk->request($path,$method,$params);
var_dump($result);
```

## 更多
### [文档中心](http://platform-developer.ex-sandbox.com/docs)
### [功能包中心](http://platform-developer.ex-sandbox.com/pack)
```shell script
# 配置阿里云镜像源
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
# 取消配置阿里云镜像源
composer config -g --unset repos.packagist
```
