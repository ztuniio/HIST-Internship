<!DOCTYPE html>
<html>
<head>
	<title>Web Page Layout</title>
	 <style type="text/css">
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: orange;
}

		header {
			background-color: green;
			border-bottom: 1px solid white;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			padding: 20px;
}

		h1 {
			margin: 0;
			font-size: 32px;
			color: white;
}

		div ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
}

		div li {
			margin-right: 20px;
}

		div a {
			text-decoration: none;
			color: black;
			font-size: 18px;
			text-shadow: 1px 1px 1px #fff;
}

		div a:hover {
			color: blue;
}

		main {
			display: flex;
			flex-direction: row;
			margin: 20px ;
}

		.column-left {
			background-color: blue;
			border: 1px solid black;
			border-radius: 5px;
			box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
			flex: 1;
			padding: 20px;
}

		.column-right {
			background-color: red;
			border: 1px solid black;
			border-radius: 5px;
			box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
			flex: 1;
			padding: 20px;
}

		h2 {
			margin-top: 0;
			font-size: 24px;
			color: white;
}

		p {
			margin-bottom: 20px;
			line-height: 1.5;
}

		footer {
			background-color: darkgray;
			border-top: 1px solid black;
			box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
			padding: 20px;
			text-align: center;
}

		footer p {
			margin: 0;
			font-size: 14px;
			color: darkred;
			text-shadow: 1px 0px 1px black;
			transform: rotate(-2deg);
}
</style>
</body>
</head>
<body>
	<header>
		<h1>QUEST, NAWABSHAH</h1>
		<div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Departments</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
	</header>
	<main>
		<div class="column-left">
			<h2>NEWS & UPDATES</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget euismod sapien. Vestibulum ultrices nisi at lectus elementum ultrices. Nunc ut elit id felis varius egestas. Duis euismod felis vitae urna bibendum vestibulum. Fusce nec sapien mauris. Pellentesque ut porta mauris.</p>
			<p>Phasellus non diam non diam elementum lobortis. Vivamus eu urna sit amet nunc pellentesque molestie. Fusce pharetra nisl at magna maximus elementum. Maecenas pretium metus vel lacinia faucibus. Proin bibendum, purus id convallis blandit, justo metus pretium est, sed vestibulum tortor ipsum vel turpis.</p>
			<p>Aliquam sagittis fringilla mi, a ultricies risus interdum quis. Nam sed dolor euismod, sodales eros eu, congue leo. Maecenas luctus massa at arcu congue, non dapibus mauris auctor. Fusce maximus metus vel mauris auctor ultricies. Mauris ut malesuada mauris.</p>
		</div>
		<div class="column-right">
			<h2> EXAMINATIONS & RESULTS</h2>
			<p>Nam interdum eget arcu in finibus. Donec lacinia massa a lorem convallis, eu vestibulum elit egestas. Suspendisse sed congue est. Aenean lacinia laoreet sagittis. Sed tincidunt metus eu sapien ultricies suscipit.</p>
			<p>Cras vel libero eget enim gravida iaculis eu id ante. Praesent nec feugiat nulla. Phasellus vel velit libero. Morbi maximus, felis eu scelerisque suscipit, nulla enim fringilla ipsum, eget vehicula arcu massa id sapien.</p>
			<p>Nunc malesuada magna vel turpis varius volutpat. Donec vel sapien eget eros convallis elementum. Sed consequat velit eget dolor fringilla, vel convallis sapien malesuada. Suspendisse fermentum felis quis orci bibendum, vel facilisis enim vestibulum.</p>
		</div>
	</main>
	<footer>
		<p>&copy; 2023 QUEST Nawabshah, All Rights Reserved.</p>
	</footer>
</body>
</html>
