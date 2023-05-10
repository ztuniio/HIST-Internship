<?php

$num1 = 45;
$num2 = 15;
$operator = "+";

switch ($operator)

{
case "+":
    $result = $num1 + $num2;
    echo "Result: ".$result;
    break;
case "-":
    $result = $num1 - $num2;
    echo "Result: ".$result;
    break;
case "*":
    $result = $num1 * $num2;
    echo "Result: ".$result;
    break;
case "/":
    $result = $num1 / $num2;
    echo "Result: ".$result;
    break;
}
?>