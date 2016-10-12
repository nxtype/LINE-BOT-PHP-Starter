<?php
$access_token = 'lF+X1m2XmgbBfwl1vQxmS/K90jBYCEfPA+O2nDYLM0MSse4/hclS0XfyEcSYZcVxzEtHxX38LbkaxQTOP9Kdbcm58rOhduNx13/yIxqJCTICYumr9qmiQhZ5+ERAHOpsUQ3vHX/NfMMqXrKT7hl/pwdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:pa6KoaIhl2U6URT@velodrome.usefixie.com:80';
$proxyauth = 'zent.bank@gmail.com:42213630bank';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
