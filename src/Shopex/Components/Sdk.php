<?php


namespace Shopex\Components;


class Sdk
{
    public $appKey;
    public $appSecret;

    public function __construct($appKey, $appSecret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }

    public function genSign($params, $secret)
    {
        return strtoupper(md5($secret . $this->assemble($params) . $secret));
    }

    public function assemble($params)
    {
        if (!is_array($params)) {
            return null;
        }
        ksort($params, SORT_STRING);
        $sign = '';
        foreach ($params as $key => $val) {
            $sign .= $key . (is_array($val) ? $this->assemble($val) : $val);
        }
        return $sign;
    }

    public function request($url, $method, $params)
    {
        $params['timestamp'] = date("Y-m-d H:i:s", time());
        $params['app_key'] = $this->appKey;
        $params['version'] = '1.0';
        $params['method'] = $method;

        $params['sign'] = $this->genSign($params, $this->appSecret);


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
//            echo "cURL Error #:" . $err;
            return false;
        } else {
            return json_decode($response,true);
        }
    }
}
