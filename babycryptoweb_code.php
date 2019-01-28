<?php
$kkk = 5;
$s = "e1iwZaNolJeuqWiUp6pmo2iZlKKulJqjmKeupalmnmWjVrI=";
$s = base64_decode($s);
$res = "";
for ($i = 0, $j = strlen($s); $i < $j; $i++) {
    $ch = substr($s, $i, 1);  // $chは文字列$sのi番目
    $kch = substr($kkk, ($i % strlen($kkk)) - 1, 1);  // strlen($kkk) = 1なので$kchは常に5
    $ch = chr(ord($ch) + ord($kch));  // ASCII codeで数字に変換して足し, 元に戻す
    $res .= $ch;  // C言語でいう+=に相当
};
echo $res;
?>