<?php

/* strip_tags : 文字列からHTMLおよびPHPタグを取り除く*/
$text = "<p>こんにちは！</p> <?php ?>";
echo strip_tags($text);

echo "\n\n";

/* array_push : 配列の最後に要素を追加する*/
$array = ["apple", "orange"];
array_push($array, "banana", "strawberry");
print_r($array);

echo "\n\n";

// array_merge : 複数の配列を結合する
$array1 = ["a", "b", "c"];
$array2 = ["d", "e"];
$array3 = ["f", "g"];
print_r(array_merge($array1, $array2, $array3));

echo "\n\n";

// time : 現在のUnixタイムスタンプを取得する
// mktime : 指定した日時のUnixタイムスタンプを取得する
echo time() . "\n";
$time = mktime(15, 8, 0, 4, 26, 2020);
echo $time;

echo "\n\n";

// date : 指定した日時を任意のフォーマットで書式化する
echo date("Y-m-d H:i:s") . "\n";
echo date("Y年m月d日 H時i分s秒", $time);