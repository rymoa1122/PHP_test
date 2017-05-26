<?php
 include 'rongapi.php';
 session_start();

 $memberobj = new Member('A123456789');
 $cartobj = new Cart($memberobj);

 $cartobj->addItem('p001',rand(1,10));
 $cartobj->addItem('p002',rand(1,10));
 $list = $cartobj->getList();
 foreach($list as $pid => $qty){
     echo "{$pid} : {$qty} <br> ";
 }
 ?>
<hr>
<a href="rong36.php">Next</a>
