<?php
$zip = $_GET['zip'];
$url =  "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" .$zip;
$response = file_get_contents($url);
$response = json_decode($response, true);

echo 'あなたの住所は';
echo $response['results'][1]['address1'];
echo $response['results'][1]['address2'];
echo $response['results'][1]['address3'];

