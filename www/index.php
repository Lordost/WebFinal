<!DOCTYPE html>
<html>
	<head>
		<title>Zoxi Games</title>
		<link rel="shortcut icon" href="Images/zoxiicon.png">
		<link rel="stylesheet" type="text/css" href="CSS\Main.css">
	</head>
	<body>
		<div class="TitleLogo">
			<h1>ZOXI</h1>
			<img class="Logo" src="Images\white-zoxi.png"/>
			<h1>GAMES</h1>
		</div>
		<nav class="Navigation">
				<a class="NavButtons" href="#faqu">Home</a>
				<a class="NavButtons" href="#faqu">Games</a>
				<a class="NavButtons" href="#faqu">Codes</a>
				<a class="NavButtons" href="#faqu">About</a>
		</nav>
		<div class="News">
			<div class="RightArrow" onclick="plusDivs(1)">
				<img src="C:\wamp2\www\Images\Arrow.png" onclick="plusDivs(1)">
			</div>
			<div class="LeftArrow" onclick="plusDivs(-1)">
				<img src="C:\wamp2\www\Images\Arrow.png" onclick="plusDivs(-1)">
			</div>
				<img class="NewsImage" src="https://d1r7xvmnymv7kg.cloudfront.net/sites_products/darksouls3/assets/img/DARKSOUL_facebook_mini.jpg">
				<img class="NewsImage" src="http://cdn1.pcadvisor.co.uk/cmsdata/features/3616019/Dishonored_2_release_date_price_platforms_pre-order_official_trailer_thumb800.jpg">
				<img class="NewsImage" src="http://static5.techinsider.io/image/571a6d5652bcd01b008be79c-1200/doom-cover.png">
				<h3>Placeholder Game</h3>
				<script>
					var slideIndex = 1;
					showDivs(slideIndex);

					function plusDivs(n) {
					  showDivs(slideIndex += n);
					}

					function currentDiv(n) {
					  showDivs(slideIndex = n);
					}

					function showDivs(n) {
					  var i;
					  var x = document.getElementsByClassName("NewsImage");
					  if (n > x.length) {slideIndex = 1}    
					  if (n < 1) {slideIndex = x.length} ;
					  for (i = 0; i < x.length; i++) {
					     x[i].style.display = "none";  
					  }
					  x[slideIndex-1].style.display = "block";  
					}
						</script>
		</div>
		<footer>
			<script type="text/javascript" src="JS/jquery.min.js"></script>
			<script type="text/javascript"></script>
		</footer>
	</body>
</html>