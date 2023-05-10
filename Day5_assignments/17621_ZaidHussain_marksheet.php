<?php

$sub1 = 67;
$sub2 = 98;
$sub3 = 88;
$sub4 = 78;
$sub5 = 40;

$total_marks = 500;
$obtained_marks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = ($obtained_marks/$total_marks)*100;

if ($sub1 < 40 || $sub2 < 40 || $sub3 < 40 || $sub4 < 40 || $sub5 < 40) {
  echo "Fail";
} else {
  echo "total marks: ".$total_marks."<br>";
  echo "obtained marks: ".$obtained_marks."<br>";
  echo "percentage: ".$percentage."<br>";

  switch (true)
{
case ($percentage >= 90):
      echo "grade: A+";
      break;
case ($percentage >= 80):
      echo "grade: A";
      break;
case ($percentage >= 70):
      echo "grade: B+";
      break;
case ($percentage >= 60):
      echo "grade: B";
      break;
case ($percentage >= 50):
      echo "grade: C";
      break;
default:
      echo "grade: D";
      break;
}
}
?>
