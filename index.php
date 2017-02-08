<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo("title")?></title>
		<link rel="stylesheet" href="<?php print CSS?>normalize.css">
		<link rel="stylesheet" href="<?php print CSS?>main.css">
		<script src="https://use.fontawesome.com/c376f3e971.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	</head>
	<body>
		<header>
			<figure>
				<img src="<?php print IMG?>profile.jpeg" alt="">
			</figure>
			<h1>UX Designer Frontend and Wordpress Developer!!</h1>
			<h3>Just KISS (Keep it Simple Stupid)</h3>
		</header>
		<section id="main">
			<section id="personalinfo">
				<div>
					<figure><img src="<?php print IMG?>user.png" alt=""></figure><h1> Personal Info</h1>
				</div>
				<p> <i class="fa fa-map-marker" aria-hidden="true"></i>  Queens, New York</p>
				<p><i class="fa fa-mobile" aria-hidden="true"></i> <a href="tel:+13472162229">347-216-2229</a></p>
				<p><i class="fa fa-envelope-o" aria-hidden="true"> <a href="mailto:neli92santscz@gmail.com">neli92santscz@gmail.com</a></i></p>
				<p><i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href="https://platzi.com/@nescz/" target="_blank">Platzi Student</a></p>
			</section>
			<section id="knowledge">
				<div>
					<figure><img src="<?php print IMG?>knowledge.png" alt=""></figure><h1> Knowledge</h1>
				</div>
			</section>
			<section id="portfolio">
				<div>
					<figure><img src="<?php print IMG?>portfolio.png" alt=""></figure><h1> Portfolio</h1>
				</div>
			</section>
		</section>
		<footer>
			<figure>	
				<a href="http://www.w3.org/html/logo/"><img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-device-multimedia-performance-semantics.png" width="261" height="64" alt="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, Multimedia, Performance &amp; Integration, and Semantics"></a>
			</figure>
		</footer>
	</body>
</html>