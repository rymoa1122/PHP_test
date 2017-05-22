<?php
$a[0] = 12;
$a[7] = 'Bard';
echo gettype($a);
var_dump($a);
echo count($a);
echo "<hr>";

$b[] = 123;
$b[] = 12.3;
$b[] = true;
var_dump($b);
echo count($b);
echo "<hr>";

$bard['age'] = 51;
$bard['weight'] = 81;
$bard['name'] = 'Bard';
$bard['gander'] = true;
var_dump($bard);
echo count($bard);
echo "<hr>";

$c = array(1, 2, 3, 'gander' => true);
var_dump($c);
echo count($c);