<?php
include 'rongapi.php';
session_start();
if (!isset($_SESSION['cart']))
    header('Location: rong35_member.php');
$cartObj = $_SESSION['cart'];
$var1 = $_SESSION['var1'];
echo 'Page 2<hr>';
echo $var1 . '<br>';
$list = $cartObj->getList();
foreach($list as $pid => $qty){
    echo "{$pid} : {$qty}<br>";
}
?>
<hr>
<a href="logout.php">Logout</a>