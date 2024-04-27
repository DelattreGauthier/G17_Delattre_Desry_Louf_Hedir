<!DOCTYPE html>
<html lang="fr">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéo - Jeux de Simulation</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<?php  include ('../../php/header.php'); ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Simulation/simulation_EN.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>

		<main>
		<!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
			<section class="grid-container">
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux de Simulation, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Immersion et Réalisme Simulé</h2>
					<p>Ces jeux de simulation plongent les joueurs dans des expériences authentiques, les transportant dans des mondes où le réalisme et l'immersion prévalent.</p>

					<ul>
						<li><strong>Expérience Authentique :</strong> Les joueurs vivent une immersion totale grâce à des scénarios réalistes et des mécanismes de jeu fidèles à la réalité.</li>
						<li><strong>Gestion Stratégique :</strong> Prenez des décisions stratégiques pour gérer des aspects variés, de la construction à la gestion des ressources.</li>
						<li><strong>Progression Narrative Réaliste :</strong> L'intrigue se dévoile de manière réaliste, incitant les joueurs à évoluer au fil des défis rencontrés.</li>
						<li><strong>Collecte de Ressources :</strong> Rassemblez des ressources vitales pour développer votre simulation et relever de nouveaux défis.</li>
						<li><strong>Esthétique Visuelle Immersive :</strong> Des graphismes soigneusement conçus pour offrir une expérience visuelle immersive et réaliste.</li>
					</ul>

					<p>Ces jeux de simulation offrent une expérience de jeu authentique, mettant l'accent sur l'immersion et la gestion réaliste pour les amateurs de défis simulés.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Simulation/Présentation/photo-simulation-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Celeste, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Cities Skylines 2</h2>
					<p>Cities Skylines 2 offre une expérience de construction de ville réaliste, mettant les joueurs au défi de développer et de gérer une métropole prospère.</p>

					<ul>
						<li><strong>Construction Urbaine :</strong> Bâtissez une ville en gérant l'urbanisme, les infrastructures, et les besoins des citoyens.</li>
						<li><strong>Gestion des Ressources :</strong> Équilibrez les ressources, l'économie, et les services pour assurer la croissance de votre cité.</li>
						<li><strong>Expansion Stratégique :</strong> Planifiez l'expansion de votre ville avec précision pour maximiser son efficacité.</li>
						<li><strong>Résolution de Problèmes :</strong> Faites face à des défis tels que la circulation, la pollution, et les catastrophes naturelles.</li>
						<li><strong>Interaction Citoyenne :</strong> Répondez aux besoins des citoyens, surveillez leur bonheur et maintenez l'ordre public.</li>
						<li><strong>Esthétique Urbaine :</strong> Des graphismes détaillés capturant l'essence des métropoles modernes.</li>
					</ul>

					<p>Cities Skylines 2 offre une expérience immersive de gestion urbaine, où chaque décision influence le développement de votre cité.</p>
					<iframe src="https://store.steampowered.com/widget/949230/885642/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Simulation/CitiesSkylines/citysky-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Simulation/CitiesSkylines/citysky-2.png" alt="carrousel 2">
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Simulation/CitiesSkylines/citysky-3.png" alt="carrousel 3">
							</div>
							<!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
							<label for="carousel-3" class="carousel-control prev control-1">‹</label>
							<label for="carousel-2" class="carousel-control next control-1">›</label>
							<label for="carousel-1" class="carousel-control prev control-2">‹</label>
							<label for="carousel-3" class="carousel-control next control-2">›</label>
							<label for="carousel-2" class="carousel-control prev control-3">‹</label>
							<label for="carousel-1" class="carousel-control next control-3">›</label>
							<!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
							<ol class="carousel-indicators">
								<li>
									<label for="carousel-1" class="carousel-bullet" aria-label="Aller à la diapositive 1">•</label>
								</li>
								<li>
									<label for="carousel-2" class="carousel-bullet" aria-label="Aller à la diapositive 2">•</label>
								</li>
								<li>
									<label for="carousel-3" class="carousel-bullet" aria-label="Aller à la diapositive 3">•</label>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Hollow Knight, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltC">
					<h2>Planet Zoo</h2>
					<p>Planet Zoo vous plonge dans le monde fascinant de la gestion de zoo, où vous pouvez créer et gérer un environnement propice à la vie animale.</p>

					<ul>
						<li><strong>Création de l'Habitat :</strong> Concevez des enclos réalistes pour différentes espèces, en prenant en compte leurs besoins spécifiques.</li>
						<li><strong>Gestion des Espèces :</strong> Choisissez parmi une variété d'animaux et assurez-vous de leur bien-être, de leur reproduction et de leur survie.</li>
						<li><strong>Interaction avec les Visiteurs :</strong> Créez des expériences éducatives et divertissantes pour les visiteurs, tout en respectant les règles de conservation.</li>
						<li><strong>Conservation :</strong> Participez à des programmes de préservation et contribuez à la protection des espèces en danger.</li>
						<li><strong>Gestion du Zoo :</strong> Prenez des décisions stratégiques pour assurer le succès financier de votre zoo tout en préservant l'écosystème.</li>
						<li><strong>Esthétique Naturelle :</strong> Des graphismes détaillés recréant la beauté naturelle des habitats animaliers.</li>
					</ul>

					<p>Planet Zoo offre une expérience immersive de gestion de zoo, mettant l'accent sur la conservation et le bien-être des animaux.</p>
					<iframe src="https://store.steampowered.com/widget/703080/202709/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Simulation/PlanetZoo/planetzoo-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Simulation/PlanetZoo/planetzoo-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Simulation/PlanetZoo/planetzoo-3.png" alt="carrousel 6">
							</div>
							<!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
							<label for="carousel-6" class="carousel-control prev control-4">‹</label>
							<label for="carousel-5" class="carousel-control next control-4">›</label>
							<label for="carousel-4" class="carousel-control prev control-5">‹</label>
							<label for="carousel-6" class="carousel-control next control-5">›</label>
							<label for="carousel-5" class="carousel-control prev control-6">‹</label>
							<label for="carousel-4" class="carousel-control next control-6">›</label>
							<!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
							<ol class="carousel-indicators">
								<li>
									<label for="carousel-4" class="carousel-bullet" aria-label="Aller à la diapositive 1">•</label>
								</li>
								<li>
									<label for="carousel-5" class="carousel-bullet" aria-label="Aller à la diapositive 2">•</label>
								</li>
								<li>
									<label for="carousel-6" class="carousel-bullet" aria-label="Aller à la diapositive 3">•</label>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php  include ('../../php/footer.php'); ?>
	</body>
</html>