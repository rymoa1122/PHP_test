<?php

$poker = array();
for ($i=0;$i<52;$i++)$check[]=false;
for ($i = 0; $i < 52 ; $i++) {

    do{
        $isRepeat = false;
        $temp = rand (0, 51);
        if(!$check[$temp]){
        $check[$temp]=true;
        }
         else{
          $isRepeat=true;
    }
    } while ($isRepeat);

      echo $poker[$i] . '<br>';
}