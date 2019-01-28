<?php

$code = '$kkk=5;$s="e1iwZaNolJeuqWiUp6pmo2iZlKKulJqjmKeupalmnmWjVrI=";$s=base64_decode($s);$res="";for($i=0,$j=strlen($s);$i<$j;$i++){$ch=substr($s,$i,1);$kch=substr($kkk,($i%strlen($kkk))-1,1);$ch=chr(ord($ch)+ord($kch));$res.=$ch;};echo $res;';

if (isset($_GET['p']) && isset($_GET['b']) && strlen($_GET['b']) === 1 && is_numeric($_GET['p']) && (int) $_GET['p'] < strlen($code)) {
    $p = (int) $_GET['p'];
    $code[$p] = $_GET['b'];
    eval($code);
} else {
    show_source(__FILE__);
}

?>