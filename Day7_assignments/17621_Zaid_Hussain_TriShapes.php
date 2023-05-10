<?php


echo "a) Star Triangular Shape:";
echo "<br/>";
echo "<br/>";



for($a = 1; $a <=5; ++$a)
{
      for($b = 1; $b<= $a; ++$b)
      {
      echo " * ";
      }
      echo"<br/>";
}


echo "<br/>";
echo "b) Alphabetical Triangular Shape:";
echo "<br/>";



$a = "ABCDE";

for ($i=1; $i <=5; ++$i)
{
    echo "<br/>"  ;" &nbsp;" ;
    for ($j = 0; $j < $i; $j++) {
    echo $a[$j];
    }
}

echo "<br />";  
echo "<br />";
echo "c) Numeric Triangular Shape:";
echo "<br />";
echo "<br />";  


for($a=1; $a <=5; ++$a)
{
     for($b=1; $b<=$a; ++$b)
     {
     echo$b."&nbsp;";
     }
     echo"<br/>";
}




?>