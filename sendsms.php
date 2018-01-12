<?php
//填写手机号、账号
$phone="";
$message="【支付宝】你有一个支付宝红包，赶快领取吧！https://m.alipay.com/3u0rerE";
function sendSms($phone,$message){
            $url="https://api.ucpaas.com/sms-partner/access/b000q7/sendsms";
            $body='{
                "clientid":"",
                "password":"a2127f8fc81790b4798d2ab6cf8e94a3",
                "mobile":"'.$phone.'",
                "smstype":"4",
                "content":"'.$message.'",
                "extend":"01",
                "uid":"1234"
                }';
            $mine = 'application/json';
            $header = array(
                'Accept:' . $mine,
                'Content-Type:' . $mine . ';charset=utf-8',
            );
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $result = curl_exec($ch);
            curl_close($ch);
        //echo $result;
        return $result;
    
}
echo sendSms($phone,$message);
?>