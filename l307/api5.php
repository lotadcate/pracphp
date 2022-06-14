<?php
// 数字７桁かどうかチェック 0,1が返ってくる
$rtn = preg_match('/\A\d{7}\z/u', $_GET['zip']);

if (!$rtn) {
    echo '郵便番号は数字７桁で入力してください';
    exit;
}

$url =  "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" .$_GET['zip'];
$response = file_get_contents($url);
$response = json_decode($response, true);

echo 'あなたの住所は';
echo $response['results'][1]['address1'];
echo $response['results'][1]['address2'];
echo $response['results'][1]['address3'];
