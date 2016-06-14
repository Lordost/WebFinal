<!DOCTYPE html>
<html>
	<head>
		<title>Zoxi Games</title>
		<link rel="shortcut icon" href="Images/zoxiicon.png">
		<link rel="stylesheet" type="text/css" href="CSS\Main.css">
	</head>
	<body onload="desctext()">
		
		<div class="TitleLogo">
			<a href="http://zoxi.eu">
				<h1>ZOXI</h1>
				<img class="Logo" src="Images\white-zoxi.png"/>
				<h1>GAMES</h1>
			</a>
		</div>
		<nav class="Navigation">
				<a class="NavButtons" href="#faqu">HOME</a>
				<a class="NavButtons" href="games.php">GAMES</a>
				<a class="NavButtons" href="hardware.php">HARDWARE</a>
				<a class="NavButtons" href="#faqu">ABOUT</a>
				
				<?php 
				session_start();
				if(isset($_SESSION['login'])){

					echo '<a class="NavButtons" href="login.php">ACCOUNT</a>';
					echo '<a class="NavButtons" href="PHP/logout.php">LOGOUT</a>';
				}
				else{
					echo '<a class="NavButtons" href="login.php">LOGIN</a>';
				}

				 ?>
		</nav>
		<div class="News">
			<div class="RightArrow" onclick="plusDivs(-1); desctext(-1)">
				<img src="Images\Arrow.png">
			</div>
			<div class="LeftArrow" onclick="plusDivs(1); desctext(1)">
				<img src="Images\Arrow.png">
			</div>
			<div class="NewsTitle">
				<p id="NewsName"></p>
			</div>
				<a href="Products/DarkSouls3.php">	
					<img class="NewsImage" src="Images\DarkSouls.jpg">
				</a>
				<a href="Products/Dishonored2.php">
					<img class="NewsImage" src="Images\Dishonored.jpg">
				</a>
				<a href="Products/Portal2.php">
					<img class="NewsImage" src="Images\Portal.jpg">
				</a>
				<a href="exampleGame.php">
					<img class="NewsImage" src="Images\Vive.jpg">
				</a>
		</div>
		<footer>
			<script type="text/javascript" src="JS/jquery.min.js"></script>
			<script type="text/javascript"></script>
			<script src="JS/script.js"></script>
		</footer>
	</body>
</html>