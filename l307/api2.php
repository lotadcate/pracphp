<?php
$zip = $_GET['zip'];
$url =  "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" .$zip;
$response = file_get_contents($url);
var_dump($response);

