<?php
include 'rongapi.php';
//$v=fx(4);
//
//sayYa('Brad', 'Ya');
//sayYa('Eric', 'Hello');
//sayYa('Andy','Hi');
//echo '<hr>';
//sayHello('Andy', 'Brad');
//f(x) = 2x + 1

$myLottery=createLottery();
foreach ($myLottery as $lottrey){
    echo  "{$lottrey}<br>";
}
