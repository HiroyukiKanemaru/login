<?php
// session変数を定義して値を入れよう
session_start();

// セッション変数に値を代入
$_SESSION['keyword'] = 'PHP';
$_SESSION['number'] = 1000;
$_SESSION['array'] = ['PHP', 'JAVA', 'RUBY'];
var_dump($_SESSION['keyword']);

//echo $_SESSION['keyword'];
exit();
