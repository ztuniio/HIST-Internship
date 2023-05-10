<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
</head>
<body>
	<h2>Page 2</h2>
	<form action="page3.php" method="post">
		<!--<?php
			$num_fields = isset($_POST['num_fields']) ? $_POST['num_fields'] : 0;
			for ($i = 1; $i <= $num_fields; $i++) {
				echo "<label>Name:</label>";
				echo "<input type='text'><br>";
			}
		?>-->
		
		

		<label>Name:</label>
		<label><input type="name" value=""></label><br>
		<label>Gender:</label>
		<label><input type="radio" name="gender" value="Male" required>Male</label>
		<label><input type="radio" name="gender" value="Female" required>Female</label>
		</br>
		<label>Country:</label>
		<select name="country" required>
			<option value="">--Select Country--</option>
			<option value="Pakistan">Pakistan</option>
		</select>
		</br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
