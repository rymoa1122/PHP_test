<?php
$poker =array();
for ($i=0;$i<52;$i++){
    $poker[]=rand(1,51);
    echo $poker[$i] . '<br>';
}