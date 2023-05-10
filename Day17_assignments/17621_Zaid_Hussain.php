<!DOCTYPE html>
<html>
<head>
	<title>Web Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.one{
			border: 10px solid red;
			border: 20px groove green;
			border-top-style: solid;
			background-color: lightskyblue;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			box-sizing: border-box;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			background-color: black;
		}

		.header {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			padding: 10px;
			background-color: blue;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
			background-color: lightskyblue;
			position: sticky;
			top: 0px;
			border-radius: 10px;
		}

		.box{
			text-align: center;
			width: 100px;
			height: 75px;
			background-color: whitesmoke;
			border-style: groove none;
			border-color: black;
			position: fixed;
			right: 10px;
			bottom: 10px;
			border-radius: 10px;
		}

		

		.logo {
			font-size: 24px;
			font-weight: bold;
			color: black;

		}

		.navigation {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 50%;
			font-size: 16px;
			font-weight: bold;
			color: white;
		}

		.navigation a {
			margin: 0 10px;
			color: blue;
			text-decoration: none;
		}

		.navigation a:hover {
			color: lightskyblue;
		}

		.main {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 20px 0;
			padding: 20px;
			background-color: lightgreen;
			color: black;
			border: 5px solid blue;
			width: 650px;
			height: 300px;
			margin-top: 100px;
			position: centre;
		}

		.main2 {
			border-style:  solid  groove;
			border-color: red;
			align-items: center;
			justify-content: center;
			margin: 20px;
			padding: 20px;
			background-color: lightgreen;
			color: black;
			width: 650px;
			height: 100px;
			margin-top: 50px;
			position: centre;
		}

		.main h1  {
			font-size: 36px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.main p {
			font-size: 18px;
			line-height: 1.5;
			text-align: center;
		}

		.footer {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			width: 100%;
			padding: 5px;
			background-color: yellow;
		}

		.footer p,a {
			font-size: 14px;
			color: black;
			border-radius: 50px;
		}

	
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo";>NASA</div>
			<div class="navigation">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Contact</a>
			</div>
		</div>

		<div class="box">
		<p>Contact us:</p>
		<button>Send Message</button>
	    </div>

		<div class="main">
			<h1>"Welcome to NASA"</h1>
			<p>The National Aeronautics and Space Administration is America’s civil space program and the global leader in space exploration. The agency has a diverse workforce of just under 18,000 civil servants, and works with many more U.S. contractors, academia, and international and commercial partners to explore, discover, and expand knowledge for the benefit of humanity. With an annual budget of $23.2 billion in Fiscal Year 2021, which is less than 0.5% of the overall U.S. federal budget, NASA supports more than 312,000 jobs across the United States, generating more than $64.3 billion in total economic output (Fiscal Year 2019).</p>
		</div>


		<p class="main2">
			At its 20 centers and facilities across the country – and the only National Laboratory in space – NASA studies Earth, including its climate, our Sun, and our solar system and beyond. We conduct research, testing, and development to advance aeronautics, including electric propulsion and supersonic flight. We develop and fund space technologies that will enable future exploration and benefit life on Earth.
		</p>

	<div class="footer">
		<p>&copy; 2023 NASA. All rights reserved.</p>
		<div class="navigation">
			<a>Privacy</a>
			<a>Contact NASA</a>
		</div>
	</div>
</div>
