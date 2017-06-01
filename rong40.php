<?php

$password1 ='123456';
echo "{$password1}<br>";
$hosh1=password_hash($password1,PASSWORD_DEFAULT);
echo "{$hosh1}<br>";
$hosh2=password_hash($password1,PASSWORD_DEFAULT);
echo "{$hosh2}<br>";

if (password_verify($password1,$hosh1)){
    echo 'OK';
}else{
    echo 'XX';
}