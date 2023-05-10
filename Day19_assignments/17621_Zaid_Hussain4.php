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
			
		}

		.jk {
				font-family: Arial, sans-serif;
		}

		</style>

</head>
<body>
	
	<center>



	<div class="ik" >

		<div class="jk" >
			<h3 align="center" >Enter Decimal Number:</h3>

		</div>
			<form method="post">
			<input type="text" id="input" placeholder="Enter Number" name="text"/>
			<br>
			<br>
			
			<select>
						<option id="ciel ">Ciel</option>
						<option id="round">Round</option>
						<option id="floor">Floor</option>
			</select>

			<button type="submit" name="submit">Prosess</button>
			</form>

		</div>

	<?php

		if (isset($_POST["submit"])) { 
		$input = $_POST["input"];
		for ($i=0; isset($input[$i]); $i++) { 
		echo $ceil [$i]."&nbsp;";
	}
	}
	


	</center>
</body>
</html>