<?php

$number = 0;
//$sum = 0;
define("MAX", "100");
define("MIN", "1");

//echo "This is homework for php done by Anne on April 29.<br/>";
do {
    if ($number > MIN) {
        switch ($number) {
            case 2:
            case 3:
            case 5:
            case 7:
                echo $number . " is prime <br/>";
//                $sum += $number;
                break;
            default:
                if ($number % 2 != 0) {
                    if ($number % 3 != 0) {
                        if ($number % 5 != 0) {
                            if ($number % 7 != 0) {
                                echo $number . " is prime<br/>";
                                $sum += $number;
                            }
                        }
                    }
                }
                break;
        }
    }
    $number++;
} while ($number < MAX);

//echo "Sum of the primes =".$sum;
?>