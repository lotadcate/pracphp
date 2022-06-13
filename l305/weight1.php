<?php
// 変換できない値をキャストすると0
$height = (float)$_POST['height'];
echo '適正体重は'. $height*$height*22 .'kgです。';
