<?php
// phpinfo();

$dsn = 'mysql:host=dbMysql;dbname=test;charset=utf8';
$opt = array(
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$_pdo = new PDO($dsn, 'root', 'example', $opt);
var_dump($_pdo->errorCode());
exit;
