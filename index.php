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
					<li class="liA">
						<a class="smoothScroll" href="#competence"> Mes compétences </a>
					</li>
					<li class="liA">
						<a class="smoothScroll" href="#parcours"> Mon parcours </a>
					</li>
                    <li class="lImg">
					    <img src="assets/img/logo/logo_noir.png" alt="Lucas ARTEL" class="logoHeader" >
                    </li>
					<li class="liA">
						<a class="smoothScroll" href="#realisation"> Mes Réalisations</a>
					</li>
					<li class="liA">
						<a class="smoothScroll" href="#contact"> Contactez-moi </a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="imgBack">
        <?php
        include '_partial/_home.html';
        ?>
	</section>
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
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>