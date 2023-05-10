<?php


$a= 0;
$b= 1;
$c= 8;

echo"$a" . "&nbsp";
echo"$b" . "&nbsp";


    for ($x = 1; $x <= $c; $x++)
{
    $d = $a+$b;
    $a = $b;
    $b = $d;
    echo $d."&nbsp";
}

?>