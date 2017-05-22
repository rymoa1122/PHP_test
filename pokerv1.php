<?php
$poker = array();
for ($i = 0; $i < 52 ; $i++) {

do{
    $temp = rand(0, 51);
    $isRepeat = false;
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $temp) {
            $isRepeat = true;
            break;
        }
    }

} while ($isRepeat);
    $poker[] = $temp;
    echo $poker[$i] . '<br>';
}