<?php

$motch = rand(1, 12);
$motch = 4;
switch ($motch){
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
    echo '31';
    break;
    case 4: case 6: case 9:case 11:
    echo '30';
    break;
    case 2:
        echo '28';
        break;
    default;
        echo 'XX';
}<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/22
 * Time: 下午 12:49
 */