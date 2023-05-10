<?php


$s = 4;
for($a=-$s + 1; $a<$s; ++$a)

{
                for($b=1; $b<=abs($a); ++$b)
{
                echo"&nbsp;&nbsp;";  
}
                for($c=1; $c<=(2*$s-1) - (2*abs($a)); ++$c)
{
                echo"*";
}
                echo"<br/>";
}

?>