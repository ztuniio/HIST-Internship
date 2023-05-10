<!DOCTYPE html>
<html>
<head>
	<title>VERTICAL TEXT</title>
</head>
<body>
	<center>
	<form method="post">
		<label type="input">Enter text:</label>
		<input type="text" id="input" name="input">
		<button type="submit" name="submit">Go!</button>
	</form>
	</center>
  
	<?php
	if (isset($_POST["submit"])) { 
		$input = $_POST["input"];
		for ($i=0; isset($input[$i]); $i++) { 
		echo $input[$i]."&nbsp;<br>";
	}
	}
	?>

</body>
</html>