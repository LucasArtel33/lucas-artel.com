<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Lucas ARTEL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Site professionel de Lucas ARTEL, il contient mon CV, et mes réalisation " />
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<div>
			<nav class="menu">
				<ul class="mobileMenu" style="display:none;">
					<li>Bonjour</li>
					<li>Mes Réalisations</li>
					<li>Mon parcours</li>
					<li>Contact</li>
				</ul>
				<ul class="desktopMenu">
					<li>
						<a class="smoothScroll" href="#competence"> Mes compétences </a>
					</li>
					<li>
						<a class="smoothScroll" href="#parcours"> Mon parcours </a>
					</li>
					<img src="assets/img/logo/logo_noir.png" alt="Lucas ARTEL" class="logoHeader" >
					<li>
						<a class="smoothScroll" href="#realisation"> Mes Réalisations</a>
					</li>
					<li>
						<a class="smoothScroll" href=""> Contact </a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="imgBack">
		<div class="textHome">
			<h1>
				Je m'appelle Lucas Artel. <br>
				Je suis développeur web fullstack junior à Bordeaux.
			</h1>
			<p>PHP, Symfony, Sass, Bootstrap, Javascript ...</p>
		</div>
		<div class="svgHome">
			<svg viewBox="0 0 200 15">
				<polygon points="200 15, 0 15, 200 0" fill="#fff"/>
			</svg>
		</div>
		<div class="scrollBtn">
			<a class="scroll-link smoothScroll" href="#competence">
				<svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130" preserveAspectRatio="xMidYMid meet">
					<g fill="none" fill-rule="evenodd">
						<rect width="70" height="118" x="1.5" y="1.5" stroke="#000" stroke-width="3" rx="36"/>
						<circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#000"/>
					</g>
				</svg>
			</a>
		</div>
	</div>
	<section id="competence" class="competence">
        <?php
            include '_partial/_competence.html';
        ?>
	</section>
	<section id="parcours">
        <?php
        include '_partial/_parcours.html';
        ?>
	</section>
	<section id="realisation">
        <?php
        include '_partial/_realisation.html';
        ?>
	</section>
	<section id="contact">
        <?php
            include '_partial/_contact.html';
        ?>
	</section>
	<footer>

	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!--fonction smoothScroll-->
    <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
	<!--fonction slider competence-->
	<script type="text/javascript" src="assets/js/sliderCompetence.js"></script>
</body>
</html>