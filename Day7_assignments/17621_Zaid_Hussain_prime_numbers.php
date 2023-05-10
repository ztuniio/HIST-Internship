<?php

$n=15;

for($a=2; $a<=$n; ++$a)
{
          $p = true;
          for($b=2; $b<$a; ++$b)
{
          if ($a % $b == 0)
{
          $p= false; break;
}
}

          if($p)
{
          echo $a . " ";
}
}
?>
