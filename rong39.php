<?php
include 'sql.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$account = "Rymoa";
$passwd = '1234555';
$realname = 'Rymoa Ao';
$sql = "insert into member (account,passwd,realname) values (?,?,?)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$account,$passwd,$realname]);
$pdo->prepare($sql)->execute([$account,$passwd,$realname]);