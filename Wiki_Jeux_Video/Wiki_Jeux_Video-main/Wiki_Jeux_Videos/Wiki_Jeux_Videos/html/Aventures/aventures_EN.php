<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Adventure Games</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<?php  include ('../../php/header_EN.php'); ?>
		<div class="language">
    		<a href="../Aventures/aventures.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

		<main>
		   <!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
			<section class="grid-container">
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'aventures, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Adventure and Exploration</h2>
					<p>These adventure games immerse players in captivating narratives, encouraging them to explore extraordinary worlds, solve puzzles, and face thrilling challenges to reach the final objective.</p>

					<ul>
						<li><strong>Immersive Exploration:</strong> Traverse vast and detailed environments, discover hidden secrets, and encounter fascinating characters.</li>
						<li><strong>Epic Stories:</strong> Experience stories rich in twists, with memorable characters and captivating plots.</li>
						<li><strong>Puzzle Solving:</strong> Exercise your brain by solving complex puzzles to progress in the adventure.</li>
						<li><strong>Narrative Progression:</strong> The plot unfolds gradually, prompting players to continue to discover new horizons.</li>
						<li><strong>Immersive Visual Aesthetics:</strong> Carefully crafted graphics to create visually captivating worlds.</li>
					</ul>

					<p>These adventure games offer an immersive experience where exploration and discovery are at the heart of the adventure, transporting players to extraordinary worlds.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Aventures/Présentation/photo-aventures-1.png" alt="Image 1">
				</div>
				<div class="grid-item eltB">
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Genshin Impact, ainsi qu'un carrousel contenant des images illustratives. -->
					<h2>Genshin Impact</h2>
					<p>Genshin Impact takes you to a fantastic world filled with magic, adventure, and mysteries, where you can explore diverse lands and meet unique characters.</p>

					<ul>
						<li><strong>Free Exploration:</strong> Roam a vast open world, discover hidden secrets, and confront magical creatures.</li>
						<li><strong>Multicultural Team:</strong> Form a team of characters with varied skills, each from a different nation.</li>
						<li><strong>Dynamic Combat:</strong> Engage in real-time battles, use magic, and combine skills to defeat enemies.</li>
						<li><strong>Epic Quests:</strong> Participate in captivating quests and uncover a story rich in twists.</li>
						<li><strong>Treasure Collection:</strong> Search for artifacts, weapons, and resources to upgrade your characters and strengthen your team.</li>
						<li><strong>Beautiful Visual Aesthetics:</strong> Stunning graphics recreating enchanting landscapes and dazzling magical effects.</li>
					</ul>

					<p>Genshin Impact offers an immersive gaming experience, blending exploration, strategic combat, and a captivating story in a fantastic world.</p>
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
					<p>Elden Ring plunges you into a dark and fantastical universe, where an epic story unfolds in mysterious and dangerous lands, designed by Hidetaka Miyazaki and George R. R. Martin.</p>

					<ul>
						<li><strong>Immersive Exploration:</strong> Traverse a vast and detailed open world, discover secrets, and confront nightmarish creatures.</li>
						<li><strong>Intense Combat:</strong> Engage in demanding battles, based on strategy and weapon mastery.</li>
						<li><strong>Dark Epic:</strong> Dive into a captivating and complex story, where every choice influences the fate of the world.</li>
						<li><strong>Ruins Exploration:</strong> Discover ancient ruins filled with mysteries and dangers.</li>
						<li><strong>Character Progression:</strong> Improve your skills, choose your path, and become a hero or a formidable threat.</li>
						<li><strong>Immersive Visual Aesthetics:</strong> Beautiful landscapes and terrifying creatures create a unique atmosphere.</li>
					</ul>
					<p>Elden Ring offers an immersive gaming experience, combining a rich story, a complex open world, and challenging combat in a dark and fantastical universe.</p>
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
		<?php  include ('../../php/footer_EN.php'); ?>
	</body>

</php>
