<?php
$account= $_REQUEST['account'];
$password= $_REQUEST['passwd'];
$Birthday= $_REQUEST['birthday'];
$area= $_REQUEST['area'];
$gender= $_REQUEST['gender'];
$like= $_REQUEST['like'];
echo $account . '<br>';
echo $password . '<br>';
echo $Birthday . '<br>';
echo $area . '<br>';
echo $gender . '<br>';
foreach ($like as $v){
    echo "{$v}<br>";
}