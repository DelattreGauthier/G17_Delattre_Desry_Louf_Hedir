<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Arcade Games</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>
	<body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header_EN.php'); ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Arcade/arcade.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>
		<header>
			<input type="checkbox" id="videoToggle">
				<label for="videoToggle">Easter Egg</label>
				<div id="videoContainer">
				<video autoplay loop muted>
					<source src="../../photo/Arcade/EasterEgg/Easter_Egg_Pac_Man.mp4" type="video/mp4">
				</video>
				</div>
		</header>
		

		<!-- Contenu principal -->
		<main>
		  <!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structurée -->
		  <section class="grid-container">
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'arcade, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
				  <h2>Encounter and Entertainment</h2>
				  <p>These arcade games immerse players in thrilling adventures, transporting them to fantastical worlds where action and fun await.</p>
				  
				  <ul>
					<!-- Caractéristiques des jeux d'arcade -->
					<li><strong>Frenetic Action:</strong> Players experience adrenaline-pumping moments with fast-paced action, dynamic combat, and constant challenges.</li>
					<li><strong>Gaming Skills:</strong> Master special moves, quick reflexes, and strategies to dominate levels.</li>
					<li><strong>Arcade Progression:</strong> Players advance through increasingly challenging levels, testing their skill and perseverance.</li>
					<li><strong>Bonus Collection:</strong> Gather bonuses and power-ups to enhance your abilities and achieve high scores.</li>
					<li><strong>Immersive Visual Aesthetics:</strong> Vibrant and colorful graphics transport players to stimulating and fantastical worlds.</li>
				  </ul>
				  
				  <p>These arcade games offer an entertaining gaming experience, focusing on immediate fun and thrilling competition among players.</p>
				</div>
				<div class="grid-item image1">
				  <img src="../../photo/Arcade/Présentation/photo-arcade-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu PACMAN, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
				  <h2>PAC MAN</h2>
				  <h3>Explore a maze filled with dots in this classic video game!</h3>
				  
				  <p>PAC MAN is an iconic video game developed by Namco. You play as PAC MAN, a hungry yellow ball, and your mission is to eat all the dots in the maze while avoiding ghosts. Devour special pac-dots to make ghosts vulnerable and score bonus points!</p>
				  
				  <h4>Game Features:</h4>
				  <ul>
					<!-- Caractéristiques du jeu PAC MAN -->
					<li><strong>Maze Exploration:</strong> Navigate the maze and eat all the dots to advance to the next level.</li>
					<li><strong>Formidable Ghosts:</strong> Avoid colored ghosts that relentlessly pursue you.</li>
					<li><strong>Special Pac-Dots:</strong> Transform the tables by eating special pac-dots and attack vulnerable ghosts.</li>
					<li><strong>Bonus Points:</strong> Score bonus points by devouring vulnerable ghosts and completing levels.</li>
				  </ul>
				  
				  <p>Dive into the captivating world of PAC MAN and take on the maze challenge! To learn more about this classic game, visit the official site: <a class="website_link" href="https://pacman.com">PAC MAN</a></p>
				</div>
				<div class="grid-item image2">
				  <!-- Cette partie du code crée un carrousel d'images -->
				  <div class="carousel">
					<div class="carousel-inner">
					  <!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
					  <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/Pac-man/pacman-1.png" alt="carrousel 1">
					  </div>
					  <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/Pac-man/pacman-2.png" alt="carrousel 2">
					  </div>
					  <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/Pac-man/pacman-3.png" alt="carrousel 3">
					  </div>
					  <!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
					  <label for="carousel-3" class="carousel-control prev control-1">‹</label>
					  <label for="carousel-2" class="carousel-control next control-1">›</label>
					  <label for="carousel-1" class="carousel-control prev control-2">‹</label>
					  <label for="carousel-3" class="carousel-control next control-2">›</label>
					  <label for="carousel-2" class="carousel-control prev control-3">‹</label>
					  <label for="carousel-1" class="carousel-control next control-3">›</label>
					  <!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du carrousel -->
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
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Street Fighter, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltC">
				  <h2>Street Fighter</h2>
				  <h3>Engage in epic battles in this legendary fighting game!</h3>
				  
				  <p>Street Fighter is an iconic fighting game developed by Capcom. Choose from a variety of fighters, each with unique fighting styles, and engage in epic duels. Master special moves, chain combos, and become the champion of the world tournament!</p>
				  
				  <h4>Game Features:</h4>
				  <ul>
					<!-- Caractéristiques du jeu Street Fighter -->
					<li><strong>Fighter Selection:</strong> Choose your favorite fighter from a diverse list of characters.</li>
					<li><strong>Epic Battles:</strong> Face off against other players or the computer in intense and strategic fights.</li>
					<li><strong>Special Moves:</strong> Master the special moves of each character to gain the advantage.</li>
					<li><strong>World Championship:</strong> Participate in tournaments to become the undisputed champion of Street Fighter.</li>
				  </ul>
				  
				  <p>Immerse yourself in the excitement of street fights and prove your superiority in the ring! To learn more about this legendary game, visit the official site: <a class="website_link" href="https://www.streetfighter.com">Street Fighter</a></p>
				</div>
				<div class="grid-item image3">
				  <!-- Cette partie du code crée un carrousel d'images -->
				  <div class="carousel">
					<div class="carousel-inner">
					  <!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
					  <input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/StreetFighter/streetfighter-1.png" alt="carrousel 4">
					  </div>
					  <input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/StreetFighter/streetfighter-2.png" alt="carrousel 5">
					  </div>
					  <input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
					  <div class="carousel-item">
						<img src="../../photo/Arcade/StreetFighter/streetfighter-3.png" alt="carrousel 6">
					  </div>
					  <!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
					  <label for="carousel-6" class="carousel-control prev control-4">‹</label>
					  <label for="carousel-5" class="carousel-control next control-4">›</label>
					  <label for="carousel-4" class="carousel-control prev control-5">‹</label>
					  <label for="carousel-6" class="carousel-control next control-5">›</label>
					  <label for="carousel-5" class="carousel-control prev control-6">‹</label>
					  <label for="carousel-4" class="carousel-control next control-6">›</label>
					  <!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du carrousel -->
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
		<?php  include ('../../php/footer_EN.php'); ?>
	</body>
</html>
