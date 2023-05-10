<?php


$n=4;

      for($a=1;$a<=$n;$a++)
{
      for($b=1;$b<=(2*$n)-1;$b++)
{
      if($b>=$n-($a-1) && $b<=$n+ ($a-1))
{
      echo " * ";
}
      else
{
      echo"&nbsp;"."&nbsp;";
}
}
      echo"<br/>";
}

?>