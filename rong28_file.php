<?php
$data = file("rong.txt");
foreach ($data as $line){
    echo "==>{$line}<br>";
}