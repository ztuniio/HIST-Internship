<?php

echo  "IN FOR LOOP";
echo "<br/>";
echo "<br/>";



$e = "";
$o = "";

for ($a = 1; $a <= 100; ++$a)
{
      if ($a % 2 === 0)
{
        $e .= $a . " ";
    } else
{
        $o .= $a . " ";
    }
}
echo "Even numbers: " . $e;
echo "<br/>";
echo "Odd numbers: " . $o;



echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo  "IN WHILE LOOP";
echo "<br/>";
echo "<br/>";



$e = "";
$o = "";

$i = 1;

while ($i <= 100)
{
      if ($i % 2 === 0)
{
        $e.= $i . " ";
    } else
{
        $o.= $i . " ";
    }
    $i++;
}
echo "Even numbers: " . $e;
echo "<br/>";
echo "Odd numbers: " . $o;

?>