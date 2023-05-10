<table border="2">
  <?php
  $n = 5;

  for ($a = 2; $a <= $n; $a++)
{
    echo "<tr>";
  
    for ($b = 1; $b <= 10; $b++)
{
      $m = ($a * $b) . "<br>";

    echo "<td>" . "$b x $a = $m" . "</td>";
}

    echo "</tr>";
    
}
  ?>
</table>
