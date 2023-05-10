<?php

$units = 155;
$amount = 0;

if($units <= 100) {
$amount = $units * 5;
} elseif ($units <= 200) {
$amount = (100 * 5) + (($units - 100) * 10);
} elseif ($units <= 300) {
$amount = (100 * 5) + (100 * 10) + (($units - 200) * 15);
} else {
$amount = (100 * 5) + (100 * 10) + (100 * 15) + (($units - 300) * 25);
}

echo "total bill: ".$amount;

?>