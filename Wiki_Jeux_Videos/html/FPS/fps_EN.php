<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - First Person Shooter</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<?php  include ('../../php/header_EN.php'); ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../FPS/fps.php" class="photo_language">
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
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux FPS, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>First Person Shooter (FPS) Games</h2>
					<p>FPS games immerse players in a first-person perspective, putting them at the center of action and adrenaline.</p>

					<ul>
						<li><strong>Shooting Mechanics:</strong> Shooting is the main mechanic, requiring precision and strategy to eliminate enemies.</li>
						<li><strong>Diverse Environments:</strong> Exploration of various locations, from urban areas to futuristic worlds, offering unique gaming experiences.</li>
						<li><strong>Weapons and Equipment:</strong> Collection of weapons, gadgets, and strategic tools to overcome challenges and enemies.</li>
						<li><strong>Enemies and Confrontations:</strong> Intense battles against AI-controlled opponents or other players in multiplayer modes.</li>
						<li><strong>Objectives and Missions:</strong> Accomplishment of varied missions, such as defending areas, recovering items, or eliminating specific targets.</li>
						<li><strong>Graphics and Sound Atmosphere:</strong> Immersive atmospheres with realistic or stylized graphics and captivating sound effects.</li>
					</ul>

					<p>These games often encourage responsiveness, coordination, and quick decision-making to survive and succeed.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/FPS/Présentation/photo-fps-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Doom, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Doom (1993)</h2>
					<h3>Immerse yourself in a hellish universe and face hordes of demons!</h3>

					<p>Doom is a first-person shooter classic developed by id Software. Traverse levels filled with terrifying monsters, find powerful weapons, and confront hell itself.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Iconic Levels:</strong> Explore Martian bases infested with nightmarish creatures.</li>
						<li><strong>Frenetic Gameplay:</strong> Fast-paced action, rapid shooting, and intense combat.</li>
						<li><strong>Iconic Weapons:</strong> Shotgun, BFG 9000, and other tools of massive destruction.</li>
						<li><strong>Legendary Soundtrack:</strong> Immersive music by Bobby Prince.</li>
					</ul>
					<p>Get ready to dive into a dark universe and confront evil forces in Doom (1993)! To discover this classic, visit the official page on <a class="website_link" href="https://bethesda.net/game/doom" target="_blank">Bethesda.net</a>.</p>
					<iframe src="https://store.steampowered.com/widget/379720/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-2.png" alt="carrousel 2">
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-3.png" alt="carrousel 3">
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
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Valorant, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltC">
					<h2>Valorant</h2>
					<h3>Shape your destiny in the captivating universe of Valorant!</h3>

					<p>Immerse yourself in the competitive universe of Valorant, a tactical shooting game where precision and strategy are the keys to victory.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Tactical Gameplay:</strong> Master the art of precise shooting and plan strategies with your team.</li>
						<li><strong>Unique Agents:</strong> Choose from a variety of agents, each with its own special abilities.</li>
						<li><strong>Strategic Maps:</strong> Face your opponents on maps designed for tactical encounters.</li>
						<li><strong>Intense Competition:</strong> Participate in competitive matches and climb the ranks.</li>
					</ul>
					<p>Get ready for thrilling moments, coordinate strategic attacks, and showcase your sharpshooting skills in Valorant! Visit the official website: <a class="website_link" href="https://playvalorant.com" target="_blank">Valorant</a></p>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-3.png" alt="carrousel 6">
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
		<?php  include ('../../php/footer_EN.php'); ?>
	</body>
</html>
