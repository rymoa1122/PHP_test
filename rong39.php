<?php
include 'sql.php';
$pdo=new pdo($dsn,$user,$passwd,$opt);
//while ($row = $rs ->fetchObject()){
//    echo "{$row->id}:{$row->account}<br>";
//}
$account ="rong";
$passwd ="123456";
$realname ="Anson";

$sql = "insert into member(account,passwd,realname)values(?,?,?)";
//$rs = $pdo->query($sql);
$pdo->prepare($sql)->execute([$account,$passwd,$realname]);