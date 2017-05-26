<?php

include "rongapi.php";

if (isRightTWID('A123456789')==1) {
    $myid = new TWID("A123456789");
    echo $myid->getGender() ? 'Male' : 'Femel';
    $id1 = new TWID("A123456789");
    $id2 = new TWID("A223456789");
    $id3 = new TWID("A123456789");
}   else
{   echo 'XX';
}

