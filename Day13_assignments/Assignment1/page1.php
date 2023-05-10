 <!DOCTYPE html>
<body>
<html>


<!--<head>
<h2>Marksheet:</h2>
</head>

<form action="[page2.php" method="post">

  <label for="english">English:</label>
  <input type="text" name="english" id="english"><br>

  <label for="maths">Maths:</label>
  <input type="text" name="maths" id="maths"><br>

  <label for="physics">Physics:</label>
  <input type="text" name="physics" id="physics"><br>

  <label for="chemistry">Chemistry:</label>
  <input type="text" name="chemistry" id="chemistry"><br>
<br>
  <input type="submit" value="Calculate">
</form>


<br>
<hr>
<br>


<head>
<h2>Caculator:</h2>
</head>-->




<?php
/*if(isset($_POST['maths']) && isset($_POST['english']) && isset($_POST['science'])) {
  $maths = $_POST['maths'];
  $english = $_POST['english'];
  $science = $_POST['science'];
  
  $total_marks = $maths + $english + $science;
  $percentage = $total_marks / 3;

  echo "Total Marks: " . $total_marks . "<br>";
  echo "Percentage: " . $percentage . "%";
}*/
?> 




<form action="page2.php" method="post">
  <label for="value1">Value 1:</label>
  <input type="text" name="value1" id="value1"><br>

  <label for="value2">Value 2:</label>
  <input type="text" name="value2" id="value2"><br>

  <label for="operator">Operator:</label>
  <select name="operator" id="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select><br>
<br>
  <input type="submit" value="Calculate">
</form>



 


<?php
if(isset($_POST['value1']) && isset($_POST['value2']) && isset($_POST['operator'])) {
  $value1 = $_POST['value1'];
  $value2 = $_POST['value2'];
  $operator = $_POST['operator'];

  switch($operator)
{
    case "add":
      $result = $value1 + $value2;
      break;
    case "subtract":
      $result = $value1 - $value2;
      break;
    case "multiply":
      $result = $value1 * $value2;
      break;
        case "divide":
      $result = $value1 / $value2;
      break;
    default:
      $result = "Invalid operator";
  }

  echo "Result: " . $result;
}
?>


<body>
</html>