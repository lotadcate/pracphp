<?php
$str = "102-6758 なんちゃら県うんたら市";
preg_match('/\d{3}-\d{4}/u', $str, $match);
var_dump($match);