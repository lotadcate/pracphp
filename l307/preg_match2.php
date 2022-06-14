<?php
$str = "102-6758 なんちゃら県うんたら市";
$ans1 = preg_match('/\d{3}-\d{4}/u', $str, $match1);
var_dump($ans1);
var_dump($match1);

$str = "1677858 なんちゃら県うんたら市";
$ans2 = preg_match('/\d{3}-\d{4}/u', $str, $match2);
var_dump($ans2);
var_dump($match2);