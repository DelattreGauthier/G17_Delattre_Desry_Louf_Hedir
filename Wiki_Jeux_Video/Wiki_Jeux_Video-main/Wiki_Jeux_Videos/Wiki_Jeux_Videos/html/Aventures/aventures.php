<!DOCTYPE html>
<html lang="fr">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéo - Jeux d'Aventures</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<header>
		<!-- L'en-tête de la page contient le titre du site et la navigation (liste des types de jeux et sélecteur de langue). -->
			<h1><a href="../Accueil/accueil.html">Jeux d'Aventures</a></h1>
			<nav>
			<!-- La navigation est composée d'une liste déroulante de types de jeux et d'un sélecteur de langue. -->
				<ul class="menu">
					<li>
						<a class="liste" href="../Accueil/accueil.html">Types de Jeux <span>&#9662;</span></a>
						<ul class="submenu">
						<!-- La liste déroulante contient plusieurs catégories de jeux avec des liens correspondants. -->
							<li><a href="../Aventures/aventures.html">Jeux d'Aventures</a></li>
							<li><a href="../Simulation/simulation.html">Jeux de Simulation</a></li>
							<li><a href="../FPS/fps.html">FPS</a></li>
							<li><a href="../Arcade/arcade.html">Jeux d'Arcade</a></li>
							<li><a href="../Enigme/enigme.html">Jeux d'Énigmes</a></li>
							<li><a href="../Plateforme/plateforme.html">Jeux de Plateformes</a></li>
						</ul>
					</li>
				</ul>
				<!-- Le sélecteur de langue est représenté par une icône de langue permettant de basculer vers la version anglaise du site. -->
				<ul class="language">
					<li>
						<a class="liste2" href="../Aventures/aventures_EN.html">
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
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'aventures, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Aventure et Exploration</h2>
					<p>Ces jeux d'aventure plongent les joueurs dans des récits captivants, les incitant à explorer des mondes extraordinaires, à résoudre des énigmes et à faire face à des défis palpitants pour atteindre l'objectif final.</p>
					<ul>
						<li><strong>Exploration Immersive :</strong> Parcourez des environnements vastes et détaillés, découvrez des secrets cachés et rencontrez des personnages fascinants.</li>
						<li><strong>Récits Épiques :</strong> Vivez des histoires riches en rebondissements, avec des personnages mémorables et des intrigues captivantes.</li>
						<li><strong>Résolution d'Énigmes :</strong> Faites travailler vos méninges en résolvant des énigmes complexes pour progresser dans l'aventure.</li>
						<li><strong>Progression Narrative :</strong> L'intrigue se dévoile progressivement, incitant les joueurs à poursuivre pour découvrir de nouveaux horizons.</li>
						<li><strong>Esthétique Visuelle Immersive :</strong> Des graphismes soigneusement conçus pour créer des mondes visuellement captivants.</li>
					</ul>

					<p>Ces jeux d'aventure offrent une expérience immersive où l'exploration et la découverte sont au cœur de l'aventure, transportant les joueurs dans des mondes extraordinaires.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Aventures/Présentation/photo-aventures-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Genshin Impact, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Genshin Impact</h2>
					<p>Genshin Impact vous emmène dans un monde fantastique rempli de magie, d'aventure et de mystères, où vous pouvez explorer des terres variées et rencontrer des personnages uniques.</p>

					<ul>
						<li><strong>Exploration Libre :</strong> Parcourez un vaste monde ouvert, découvrez des secrets cachés et affrontez des créatures magiques.</li>
						<li><strong>Équipe Multiculturelle :</strong> Formez une équipe de personnages aux compétences variées, chacun provenant d'une nation différente.</li>
						<li><strong>Combat Dynamique :</strong> Engagez-vous dans des combats en temps réel, utilisez la magie et combinez les compétences pour vaincre vos ennemis.</li>
						<li><strong>Quêtes Épiques :</strong> Participez à des quêtes captivantes et découvrez une histoire riche en rebondissements.</li>
						<li><strong>Collecte de Trésors :</strong> Recherchez des artefacts, des armes et des ressources pour améliorer vos personnages et renforcer votre équipe.</li>
						<li><strong>Esthétique Visuelle Magnifique :</strong> Des graphismes impressionnants recréant des paysages enchanteurs et des effets magiques éblouissants.</li>
					</ul>

					<p>Genshin Impact offre une expérience de jeu immersive, mêlant exploration, combats stratégiques et une histoire captivante dans un monde fantastique.</p>
				</div>
				<div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Aventures/GenshinImpact/genshinimpact-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Aventures/GenshinImpact/genshinimpact-2.png" alt="carrousel 2"> 
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Aventures/GenshinImpact/genshinimpact-3.png" alt="carrousel 3">
							</div>
							<!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
							<label for="carousel-3" class="carousel-control prev control-1">‹</label>
							<label for="carousel-2" class="carousel-control next control-1">›</label>
							<label for="carousel-1" class="carousel-control prev control-2">‹</label>
							<label for="carousel-3" class="carousel-control next control-2">›</label>
							<label for="carousel-2" class="carousel-control prev control-3">‹</label>
							<label for="carousel-1" class="carousel-control next control-3">›</label>
							<ol class="carousel-indicators">
							<!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
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
				<div class="grid-item eltC">
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Elden Ring, ainsi qu'un carrousel contenant des images illustratives. -->
					<h2>Elden Ring</h2>
					<p>Elden Ring vous plonge dans un univers sombre et fantastique, où une histoire épique se déroule dans des terres mystérieuses et dangereuses, conçues par Hidetaka Miyazaki et George R. R. Martin.</p>

					<ul>
						<li><strong>Exploration Immersive :</strong> Parcourez un monde ouvert vaste et détaillé, découvrez des secrets, et affrontez des créatures cauchemardesques.</li>
						<li><strong>Combat Intense :</strong> Engagez-vous dans des combats exigeants, basés sur la stratégie et la maîtrise des armes.</li>
						<li><strong>Épopée Sombre :</strong> Plongez dans une histoire captivante et complexe, où chaque choix influence le destin du monde.</li>
						<li><strong>Exploration des Ruines :</strong> Découvrez des ruines antiques remplies de mystères et de dangers.</li>
						<li><strong>Progression du Personnage :</strong> Améliorez vos compétences, choisissez votre voie, et devenez un héros ou une menace redoutable.</li>
						<li><strong>Esthétique Visuelle Immersante :</strong> Des paysages magnifiques et des créatures terrifiantes créent une atmosphère unique.</li>
					</ul>

					<p>Elden Ring offre une expérience de jeu immersive, combinant une histoire riche, un monde ouvert complexe et des combats exigeants dans un univers sombre et fantastique.</p>
					<iframe src="https://store.steampowered.com/widget/1245620/440408/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Aventures/EldenRing/eldenring-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Aventures/EldenRing/eldenring-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Aventures/EldenRing/eldenring-3.png" alt="carrousel 6">
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
			  <h4><a class="contact" href="../Contact/contact.html">Formulaire</a></h4>
			</div>
			<div class="a_propos">
			  <h3>A propos de nous</h3>
			  <h3>Site Junia</h3>
			  <h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Présentation</a></h4>
			</div>
			
		  </footer>
	</body>

</html>
