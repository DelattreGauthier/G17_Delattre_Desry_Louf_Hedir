<!DOCTYPE html>
<html lang="fr">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéo - Jeux de Plateforme</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<header>
		<!-- L'en-tête de la page contient le titre du site et la navigation (liste des types de jeux et sélecteur de langue). -->
			<h1><a href="../Accueil/accueil.php">Jeux de Plateforme</a></h1>
			<nav>
			<!-- La navigation est composée d'une liste déroulante de types de jeux et d'un sélecteur de langue. -->
				<ul class="menu">
				<li>
					<a class="liste" href="../Accueil/accueil.php">Types de Jeux <span>&#9662;</span></a>
					<ul class="submenu">
						<!-- La liste déroulante contient plusieurs catégories de jeux avec des liens correspondants. -->
						<li><a href="../Aventures/aventures.php">Jeux d'Aventures</a></li>
						<li><a href="../Simulation/simulation.php">Jeux de Simulation</a></li>
						<li><a href="../FPS/fps.php">FPS</a></li>
						<li><a href="../Arcade/arcade.php">Jeux d'Arcade</a></li>
						<li><a href="../Enigme/enigme.php">Jeux d'Énigmes</a></li>
						<li><a href="../Plateforme/plateforme.php">Jeux de Plateformes</a></li>
						</ul>
					</li>
				</ul>
				<!-- Le sélecteur de langue est représenté par une icône de langue permettant de basculer vers la version anglaise du site. -->
				<ul class="language">
					<li>
					  <a class="liste2" href="../Plateforme/plateforme_EN.php">
						<div class="photo_language">
						  <img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					  </a>
					</li>
				  </ul>
			</nav>
		</header>

		<main>
		<!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
			<section class="grid-container">
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux de Plateforme, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Plateforme et Précision</h2>
					<p>Les jeux de plateforme mettent en scène des personnages qui doivent naviguer à travers différents niveaux en sautant sur des plates-formes, en évitant des obstacles et en résolvant des énigmes pour atteindre l'objectif final.</p>

					<ul>
						<li><strong>Mécaniques de saut :</strong> Le saut est souvent la mécanique principale, nécessitant timing et précision.</li>
						<li><strong>Niveaux linéaires :</strong> Progression à travers des niveaux avec un début et une fin définis.</li>
						<li><strong>Collecte d'objets :</strong> Pièces, power-ups, ou clés pour débloquer, améliorer et explorer.</li>
						<li><strong>Ennemis et combats :</strong> Affrontez ou évitez des ennemis avec diverses mécaniques de combat.</li>
						<li><strong>Énigmes et puzzles :</strong> Résolvez des défis pour progresser.</li>
						<li><strong>Esthétique visuelle :</strong> Styles variés, du pixel art rétro aux environnements 3D modernes.</li>
					</ul>

					<p>Ces jeux suscitent souvent l'exploration et la découverte progressive de l'intrigue.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Plateforme/Présentation/photo-plateforme-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Celeste, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Celeste</h2>
					<h3>Aidez Madeline à survivre à ses démons intérieurs au mont Celeste!</h3>

					<p>Celeste est un jeu de plateformes ultra relevé réalisé par les créateurs du classique TowerFall. Relevez des centaines de défis faits à la main, découvrez tous les secrets et dévoilez le mystère de la montagne.</p>

					<h4>Caractéristiques du jeu :</h4>
					<ul>
						<li><strong>Niveaux faits à la main :</strong> Défis uniques et stimulants.</li>
						<li><strong>Une histoire captivante :</strong> Exploration des démons intérieurs de Madeline.</li>
						<li><strong>Des secrets à découvrir :</strong> Mystères cachés dans la montagne Celeste.</li>
						<li><strong>Bande-son envoûtante :</strong> Composition par Lena Raine.</li>
					</ul>
					<p>Préparez-vous à vous lancer dans une aventure épique et à relever le défi ultime dans Celeste! Visitez le site officiel : <a class="website_link" href="https://www.celestegame.com" target="_blank">Celeste Game</a></p>
					<iframe src="https://store.steampowered.com/widget/504230/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/Celeste/celeste-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/Celeste/celeste-2.png" alt="carrousel 2">
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/Celeste/celeste-3.png" alt="carrousel 3">
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
									<label for="carousel-1" class="carousel-bullet">•</label>
								</li>
								<li>
									<label for="carousel-2" class="carousel-bullet">•</label>
								</li>
								<li>
									<label for="carousel-3" class="carousel-bullet">•</label>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Hollow Knight, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltC">
					<h2>Hollow Knight</h2>
					<h3>Choisissez votre destin dans Hollow Knight !</h3>

					<p>Plongez-vous dans une aventure épique et pleine d'action dans Hollow Knight, un jeu qui vous transporte dans un vaste royaume en ruine peuplé d'insectes et de héros.</p>

					<h4>Caractéristiques du jeu :</h4>
					<ul>
						<li><strong>Un monde en 2D classique :</strong> Explorez un magnifique monde dessiné à la main.</li>
						<li><strong>Gameplay d'action intense :</strong> Affrontez des ennemis redoutables et des boss imposants.</li>
						<li><strong>Une histoire immersive :</strong> Narration subtile et mystérieuse.</li>
						<li><strong>Atmosphère unique :</strong> Ambiance sombre et envoûtante.</li>
					</ul>
					<p>Préparez-vous à vivre une aventure inoubliable, à explorer un monde mystérieux et à relever des défis épiques dans Hollow Knight! Visitez le site officiel : <a class="website_link" href="https://www.hollowknight.com" target="_blank">Hollow Knight</a></p>
					<iframe src="https://store.steampowered.com/widget/367520/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/HollowKnight/hollowknight-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/HollowKnight/hollowknight-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Plateforme/HollowKnight/hollowknight-3.png" alt="carrousel 6"> 
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
									<label for="carousel-4" class="carousel-bullet">•</label>
								</li>
								<li>
									<label for="carousel-5" class="carousel-bullet">•</label>
								</li>
								<li>
									<label for="carousel-6" class="carousel-bullet">•</label>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="contacter">
			  <h3>Nous contacter</h3>
			  <h3>Tel: 07 69 09 42 32</h3>
			  <h4><a class="contact" href="../Contact/contact.php">Formulaire</a></h4>
			</div>
			<div class="a_propos">
			  <h3>A propos de nous</h3>
			  <h3>Site Junia</h3>
			  <h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Présentation</a></h4>
			</div>
			
		</footer>
	</body>
</html>
