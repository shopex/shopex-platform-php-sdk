<?php
require "vendor/autoload.php";
# test
$test = new Shopex\Test\Test();
$test->test();

# sdk test
$app_key = '12e899f635cc4be095f99a47a4f74e9106d345b6d7264f92b6c259967701a8a1';
$app_secret = '0ee7bc67f850476aad19725341366794';
$sdk = new \Shopex\Components\Sdk($app_key,$app_secret);
$url = "http://platform-gateway.ex-sandbox.com/Rjletw/";//订单创建
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

$result = $sdk->request($url,$method,$params);
var_dump($result);
