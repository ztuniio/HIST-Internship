<?php
$a = "A1 B$2CD#E3G";
$sum = 0;

for ($i = 0; $i < strlen($a); $i++) {
    if (isset($a[$i]) && is_numeric($a[$i])) {
        $sum += intval($a[$i]);
    }
}

echo "Sum = $sum";
?>