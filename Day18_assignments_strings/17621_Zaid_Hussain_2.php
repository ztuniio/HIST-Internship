<!DOCTYPE html>
<html>
<head>
	<title>COUNT TOTAL ALPHABET (A OR A)</title>
</head>
<body>

	<center>
	<form method="post">
		<label type="input">Enter text:</label>
		<textarea placeholder="Enter" id="input" rows="1" cols="20"></textarea>
		<button type="submit" name="submit">Go!</button>
	</form>
	</center>

	<?php
	if (isset($_POST["id"])) {
		$id = $_POST["id"];
		for ($i=0; isset(id[$i]); $i++) { 
			echo "substr_count($id)";
		}
	}
	?>

</body>
</html>