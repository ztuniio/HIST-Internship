<?php

$amount = 5555;

$note5000 = 0;
$note1000 = 0;
$note500 = 0;
$note100 = 0;
$note50 = 0;
$note20 = 0;
$note10 = 0;
$note5 = 0;
$note2 = 0;
$note1 = 0;


if($amount >= 5000) {
    $temp = $amount % 500;
    $note500 = ($amount + $temp) / 500;
    $amount = $temp;
}




echo "500: " . $note500 . "\n";



?>