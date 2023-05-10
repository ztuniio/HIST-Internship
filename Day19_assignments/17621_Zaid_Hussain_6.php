<!DOCTYPE html>
<html>
<head>
	<title>COUNT ALPHABETS, WORDS & SPACES</title>
	<style type="text/css">


		.tk {
			font-family: Arial, sans-serif;
			margin: 0px;
			padding: 5px;
			background-color: lightcoral;
			border-radius: 10px;
			color: black;
			width: 440px;
			height: 40px;
			margin-top: 10px;
			text-align: center;
		}

		.ik {
			margin: 10px;
			padding: 10px;
			background-color: lightgreen;
			color: black;
			width: 440px;
			height: 150px;
			margin-top: 100px;
			align-items: center;
		}

		.jk {
			font-family: Arial, sans-serif;
		}

		.ck {
			margin: 0;
			position: right;
			bottom: 10px;
			padding: 10px;
			background-color: lightblue;
			color: black;
			width: 30px;
			height: 5px;
			border: 1px solid black;
			
		}

	</style>
</head>
<body>
	<center>
		
		<div class="tk">
			
		<h2> Ciel , Round , Floor </h2>

		</div>
		<div class="ik">
			<div class="jk">
				<h3 align="center">Enter Decimal Number:</h3>
			</div>
			<form method="post">
				<input type="text" id="input" placeholder="Enter Number" name="text"/>
				<br><br>
				<select name="method">
					<option value="ceil">Ciel</option>
					<option value="round">Round</option>
					<option value="floor">Floor</option>
				</select>
				<button type="submit" name="submit">Process</button>
			</form>
		</div>
		<?php
			if (isset($_POST["submit"])) {
				$input = $_POST["text"];
				$method = $_POST["method"];
				if ($method === "ceil") {
					$output = ceil($input);
				} if ($method === "round") {
					$output = round($input);
				} if ($method === "floor") {
					$output = floor($input);
				}
				echo '<div class="ck">'.$output.'</div>';
			}
		?>
	
	</center>
</body>
</html>
