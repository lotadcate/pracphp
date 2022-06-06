
<?php
$greeting = "こんばんは"; // 変数
echo $greeting; // 出力

$price = 1000;
echo $price;

$a = "こんにちは";
var_dump($a); // 肩を含めた変数の中身

/*
PHP のデータ型
bool
int
float(double)
string

array
object

resource
null
mixed

void
callable
iterable
*/

$a = 10;
$b = 2;
echo $a + $b;

/* 演算子
+, -, *, /, %, **
*/

// 文字列の結合
$a = "hello ";
$b = "world";
$a . $b;

$text = "こんにちは";
$text .= "こんにちは";
$text .= "こんにちは";
echo $text;

// if
$condition = true;
if ($condition) echo "条件はtrueです";

$condition = false;
if ($condition) echo "条件はtrueです"; // 実行されない

$a = 1;
if ($a === 1) {
    echo "aは1です";
}

$a = 1;
if ($a === 1) {
    echo "aは1です"; // 実行されない
}

$a = 1;
$b = 2;
if ($a < $b) {
    echo "aはbよりも小さいです";
}

$a = "1";
if ($a === 1) { // 数字
    echo "aは1です."; // 表示されない
}

if ($a === "1") { // 文字列
    echo "aは1です";
}

if ($a == 1) {
    echo "aは1です";
}

// === の方が厳密
?>

// input.html
<form method='post' action='sample.php'>
<input type='submit' name='a'>
<input type='submit' value='送信'>
</form>

// sample.php
<?php
echo $_POST['a'];
?>

/*
input.htmlから入力値がsample.phpに渡り,
sample.phpがブラウザに値を返した
*/

// sample.php
<?php
$a = $_POST['a'];
if ($a === '1') { // 入力フォームから渡ってきた値は全て文字列
    echo "aは1です";
}
?>


// sample.php
<?php
$a = $_POST['a'];
if ($a === '1') {
    echo "aは1です";
}
else {
    echo "aは1ではありません";
}
?>

// sample.php
<?php
$a = $_POST['a'];
if ($a === '1') {
    echo "aは1です";
} elseif ($a === '2') {
    echo "aは1です";
}
else {
    echo "aは1ではありません";
}
?>

// sample.php
<?php
$a = 3;
if ($a > 1) {
    echo "1より大きい"; // ここだけ実行
} elseif ($a > 2) {
    echo "2より大きい";
}
?>

// sample.php
<?php
$a = 3;
if ($a > 1) {
    echo "1より大きい";
}
    if ($a > 2) {
    echo "2より大きい";
}
// どちらも実行
?>

// for
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i."<br>";
}
/**
 * 1
 * 2
 *
 * 100
 */
?>

<?php
$a = 5;
echo "5となります: ". $a++ . "<br>";
echo '現在の $aは'. $a . "です。<br>"; // $a === 5;

$b = 5;
echo "6となります: ". ++$b . "<br>";
echo '現在の$bは'. $b . "<br>"; // $a === 6;
?>

// 配列
<?php
$name = [
    0 => '佐藤',
    1 => '鈴木',
    2 => '高橋'
];
var_dump($name);
?>

<?php
$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];
var_dump($name);
?>

<?php
$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];
echo $name['takahashi'];
?>

<?php
$name = [
    0 => '佐藤',
    1 => '鈴木',
    2 => '高橋'
];

foreach($name as $value) {
    echo $value;
}

foreach($name as $value) {
    echo '名前は' .$value. '<br>';
}

foreach($name as $key => $value) {
    echo 'キーは' .$key. '、名前は' .$value. '<br>';
}

?>

<?php
$people[0] = '佐藤';
$people[1] = '鈴木';
$people[2] = '高橋';

foreach($people as $key => $value) {
    echo 'キーは' .$key. '、名前は' .$value. '<br>';
}
?>

<?php
$a = ['A', 'B', 'C'];
var_dump($a);
?>

<?php
$b[] = 'D';
$b[] = 'E';
$b[] = 'F';
var_dump($b);
?>

<?php
$a = ['A', 'B', 'C'];
echo '1番目の要素は' . $a[0]. 'です'. '<br>';
echo '2番目の要素は' . $a[1]. 'です'. '<br>';
echo '3番目の要素は' . $a[2]. 'です'. '<br>';
?>

<?php
// 色んな書き方（キーなし）
$a = ['A', 'B', 'C'];

$a[] = 'A';
$a[] = 'B';
$a[] = 'C';

$a = array('A', 'B', 'C');

// キーあり
$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];

$name['sato'] = '佐藤';
$name['suzuki'] = '鈴木';
$name['takahashi'] = '高橋';

$name = array(
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
);
?>

<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '鈴木', 'blood' => 'B'];
$people[] = ['name' => '高橋', 'blood' => 'O'];

var_dump($people);

echo $people[0]['blood'] . '<br>';
echo $people[2]['name'];

// 内側の配列は走査しない
foreach($people as $key => $value) {
    echo 'キーは' . $key . '、値は' . $value . '<br>';
}

// キーを指定
foreach($people as $key => $person) {
    echo '名前は' . $person['name'] . '<br>';
}
?>

<?php
$people = ['name' => '佐藤', 'blood' => 'A'];

foreach($people as $key => $value) {
    echo 'キーは' .$key. '、値は' . $value . '<br>';
}
?>

<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '鈴木', 'blood' => 'B'];
$people[] = ['name' => '高橋', 'blood' => 'O'];

foreach ($people as $people_key => $person) {
    echo '順番は' .$people_key. '<br>';
    foreach ($person as $person_key => $value) {
        echo 'キーは' .$person_key. '、値は' . $value .'<br>';
    }
}
?>

// PHPとHTML
HTMLにPHPを埋め込む
全体をPHPのプログラムとして実行   PHP_EOL ... 改行

// html_php3.php
<html>
<body>
<?php
if($count === 0) {
    echo "<p> はじめまして </p>" . PHP_EOL;
} else {
    echo "<p> いつもありがとうございます </p>" . PHP_EOL;
}
?>
</body>
</html>

// html_php3_same.php
<html>
<body>
<?php if ($count === 0): ?>
<p> はじめまして </p>
<?php else: ?>
<p> いつもありがとうございます </p>
<?php endif; ?>
</body>
</html>

// foreach
<?php
$name = [
    '1' => '佐藤',
    '2' => '鈴木',
    '3' => '高橋',
];

foreach($name as $key => $value) :?>
<p><?php echo $key; ?> 人目は <?php echo $value; ?> さんです</p>
<?php endforeach; ?>

// include require ファイル読み込み
include 読み込めなくても処理継続
require 読み込めないと処理中止

// data.php
<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'O'];
?>

// ?> は　いらない　（というかないほうがよい）　命令の分離
// けど今回はつけてる

// view.php (data.php と同じディレクトリ)
<?php
require_once 'data.php';
var_dump($people);
?>

// view2.php
<?php
require_once 'data.php';
foreach($people as $key => $person) {
    echo '名前は' . $person['name'] . '<br>';
}
?>

// 関数
<?php
$a = "abcdefg";
$b = strlen($a);
echo $b; // 7
?>

<?php
$a = "abcdefg";
echo strlen($a); // 表示されない、var_dump() は異例
?>

// 関数の定義
<?php
function tax($price) {
    echo $price * 1.1;
}
tax(100);

$a = 100;
tax($a);

?>

<?php
function tax2($price) {
    return $price * 1.1;
}

$sample_price = tax(100);
echo '消費税込みの値段：' . $sample_price . '円';

// エラー
$sample_price = tax('文字列');
echo '消費税込の値段:' . $sample_price . '円';

?>

// 型の指定
<?php
function tax3(int $price) {
    return $price * 1.1;
}
?>

// 戻り値の型の指定
<?php
function tax4(int $price) : float {
    return $price * 1.1;
}
?>

// PHPマニュアルを見る
// 関数リファレンスを見る
