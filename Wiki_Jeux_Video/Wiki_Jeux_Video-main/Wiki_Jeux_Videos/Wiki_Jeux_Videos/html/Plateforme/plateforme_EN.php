<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Platform Games</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<?php  include ('../../php/header_EN.php'); ?>

		<main>
		<!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
			<section class="grid-container">
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux de Platforme, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Platform and Precision</h2>
					<p>Platform games feature characters navigating through different levels by jumping on platforms, avoiding obstacles, and solving puzzles to reach the final goal.</p>

					<ul>
						<li><strong>Jumping Mechanics:</strong> Jumping is often the main mechanic, requiring timing and precision.</li>
						<li><strong>Linear Levels:</strong> Progression through levels with defined beginnings and endings.</li>
						<li><strong>Collecting Objects:</strong> Coins, power-ups, or keys to unlock, upgrade, and explore.</li>
						<li><strong>Enemies and Combat:</strong> Confront or avoid enemies with various combat mechanics.</li>
						<li><strong>Puzzles and Challenges:</strong> Solve challenges to progress.</li>
						<li><strong>Visual Aesthetics:</strong> Varied styles, from retro pixel art to modern 3D environments.</li>
					</ul>

					<p>These games often evoke exploration and the gradual discovery of the plot.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Plateforme/Présentation/photo-plateforme-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Celeste, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Celeste</h2>
					<h3>Help Madeline survive her inner demons on Mount Celeste!</h3>

					<p>Celeste is a highly challenging platformer created by the makers of the classic TowerFall. Take on hundreds of hand-crafted challenges, discover all secrets, and unveil the mystery of the mountain.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Hand-Crafted Levels:</strong> Unique and challenging challenges.</li>
						<li><strong>Captivating Story:</strong> Explore Madeline's inner demons.</li>
						<li><strong>Discoverable Secrets:</strong> Mysteries hidden in Mount Celeste.</li>
						<li><strong>Enchanting Soundtrack:</strong> Composition by Lena Raine.</li>
					</ul>
					<p>Get ready to embark on an epic adventure and take on the ultimate challenge in Celeste! Visit the official website: <a class="website_link" href="https://www.celestegame.com" target="_blank">Celeste Game</a></p>
					<iframe src="https://store.steampowered.com/widget/504230/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image2">
					<div class="carousel">
						<div class="carousel-inner">
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
					<h3>Choose your destiny in Hollow Knight!</h3>

					<p>Immerse yourself in an epic and action-packed adventure in Hollow Knight, a game that transports you to a vast, ruined kingdom populated by insects and heroes.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Classic 2D World:</strong> Explore a beautiful hand-drawn world.</li>
						<li><strong>Intense Action Gameplay:</strong> Face formidable enemies and imposing bosses.</li>
						<li><strong>Immersive Story:</strong> Subtle and mysterious narration.</li>
						<li><strong>Unique Atmosphere:</strong> Dark and enchanting ambiance.</li>
					</ul>
					<p>Get ready for an unforgettable adventure, explore a mysterious world, and take on epic challenges in Hollow Knight! Visit the official website: <a class="website_link" href="https://www.hollowknight.com" target="_blank">Hollow Knight</a></p>
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
			  <h3>Contact Us</h3>
			  <h3>Tel: 07 69 09 42 32</h3>
			  <h4><a class="contact" href="../Contact/contact_EN.php">Form</a></h4>
			</div>
			<div class="a_propos">
			  <h3>About Us</h3>
			  <h3>Junia Website</h3>
			  <h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Presentation</a></h4>
			</div>
		  </footer>
	</body>

</html>
