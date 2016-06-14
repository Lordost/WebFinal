<!DOCTYPE html>
<html>
<head>
	<title>Zoxi Games</title>
	<link rel="shortcut icon" href="Images/zoxiicon.png">
	<link rel="stylesheet" type="text/css" href="CSS\Main.css">
</head>
<body>
	<div class="TitleLogo">
		<a href="http://zoxi.eu">
				<h1>ZOXI</h1>
				<img class="Logo" src="Images\white-zoxi.png"/>
				<h1>GAMES</h1>
			</a>
	</div>
	<nav class="Navigation">
		<a class="NavButtons" href="index.php">HOME</a>
		<a class="NavButtons" href="games.php">GAMES</a>
		<a class="NavButtons" href="#faqu">HARDWARE</a>
		<a class="NavButtons" href="#faqu">ABOUT</a>
		<?php 

				if(isset($_SESSION['login'])){

					echo '<a class="NavButtons" href="login.php">ACCOUNT</a>';
				}
				else{
					echo '<a class="NavButtons" href="login.php">LOGIN</a>';
				}

				 ?>
	</nav>
		<form class="LoginForm" action="PHP/regestration.php" method="POST">
			<p>USERNAME</p>
			<input type="text" name="Username">
			<p>EMAIL</p>
			<input type="email" name="Email">
			<p>PASSWORD</p>
			<input type="password" name="Password">
			<div class="RegisterButton">
				<input type="submit" class="Register">REGISTER</input>
			</div>
		</form>
</body>
</html>