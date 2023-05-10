<!DOCTYPE html>
<html>
<head>
	<title>Page 3</title>
</head>
<body>
	<h2>Page 3</h2>
	<table>
		<tr>
			<th>Field Name</th>
			<th>Value</th>
		</tr>
		<?php
			$num_fields = isset($_POST['num_fields']) ? $_POST['num_fields'] : 0;
			for ($i = 1; $i <= $num_fields; $i++) {
				$field_name = "Field #$i";
				if (isset($_POST["field_$i"])) {
					$field_value = $_POST["field_$i"];
				} else {
					$field_value = "";
				}
				echo "<tr><td>$field_name</td><td>$field_value</td></tr>";
			}
		?>
		<tr><td>Gender</td><td><?php echo isset($_POST['gender']) ? $_POST['gender'] : ""; ?></td></tr>
		<tr><td>Country</td><td><?php echo isset($_POST['country']) ? $_POST['country'] : ""; ?></td></tr>
	</table>
</body>
</html>
