<?php
$a=array(1,2,3);

$b[]=$a;

$b[]=array(2,4);

echo count($b[0]);