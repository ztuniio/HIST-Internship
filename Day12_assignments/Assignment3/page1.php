<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>
	<h2>Personal Info</h2>
	<form action="page2.php" method="POST">

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required></br>

		<label for="fatherName">Father's Name:</label>
		<input type="text" id="fatherName" name="fatherName" required></br>


		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="male" required>

		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label></br>



		<label for="country">Country:</label>
		<select id="country" name="country" required>
			<option value="">Select Country</option>
			<option value="Pakistan">Pakistan</option>

			
		</select>
                </br>

		<input type="submit" value="Next">

	</form>
</body>
</html>
