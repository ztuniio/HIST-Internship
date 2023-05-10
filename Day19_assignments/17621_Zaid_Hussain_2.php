<!DOCTYPE html>
<html>
<head>
	<title>COUNT ALPHABETS, WORDS & SPACES</title>
	<style type="text/css">
		.ik {
			margin: 10px;
			padding: 10px;
			background-color: lightgreen;
			color: black;
			width: 440px;
			height: 150px;
			margin-top: 100px;
			align-items: center;
			border: black;
		}
		.jk {
			font-family: Arial, sans-serif;
		}
	</style>
</head>
<body>
	<center>
		<div class="ik">
			<div class="jk">
				<h3 align="center">Enter Decimal Number:</h3>
			</div>
			<form method="post">
				<input type="text" id="input" placeholder="Enter Number" name="input"/>
				<br>
				<br>
				<select name="operation">
					<option value="ceil">Ciel</option>
					<option value="round">Round</option>
					<option value="floor">Floor</option>
				</select>
				<button type="submit" name="submit">Process</button>
			</form>
		</div>
		<?php
			if (isset($_POST["submit"])) { 
				$input = $_POST["input"];
				$operation = $_POST["operation"];
				switch ($operation) {
					case 'ceil':
						$result = ceil($input);
						break;
					case 'round':
						$result = round($input);
						break;
					case 'floor':
						$result = floor($input);
						break;
					default:
						$result = "";
						break;
				}
					
				echo "Result: $result";
				
			}
		?>

	</center>


</body>
</html>
