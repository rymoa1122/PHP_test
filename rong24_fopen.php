<?php
$fp = fopen('./rong.txt','r');
while ($line = fgets($fp)){
    echo "{$line}<br>";
}
