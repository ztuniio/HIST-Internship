<!DOCTYPE html>
<html>
<head>
	<title>Result Page</title>
</head>
<body>
	<h2>Result Page</h2>

	<?php
		$stipend = isset($_POST['stipend']);
		$discipline = isset($_POST['discipline']);
		$attendance = isset($_POST['attendance']);
		$assignment = isset($_POST['assignment']);
		$agree = isset($_POST['agree']);

		$selectedCount = ($stipend ? 1 : 0) + ($discipline ? 1 : 0) + ($attendance ? 1 : 0) + ($assignment ? 1 : 0);

		if ($selectedCount >= 3 && $agree) {
			echo "You are selected";
		} else {
			echo "Fail";
		}
	?>

</body>
</html>
