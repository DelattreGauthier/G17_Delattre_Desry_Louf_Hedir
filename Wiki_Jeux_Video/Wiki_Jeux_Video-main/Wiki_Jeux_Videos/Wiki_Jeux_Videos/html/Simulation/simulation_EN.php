<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Simulation Games</title>
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
					<a href="../Simulation/simulation.php" class="photo_language">
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
					<h2>Immersion and Simulated Realism</h2>
					<p>These simulation games immerse players in authentic experiences, transporting them to worlds where realism and immersion prevail.</p>

					<ul>
						<li><strong>Authentic Experience:</strong> Players undergo total immersion through realistic scenarios and gameplay mechanisms true to reality.</li>
						<li><strong>Strategic Management:</strong> Make strategic decisions to manage various aspects, from construction to resource management.</li>
						<li><strong>Realistic Narrative Progression:</strong> The plot unfolds realistically, encouraging players to evolve through encountered challenges.</li>
						<li><strong>Resource Collection:</strong> Gather vital resources to develop your simulation and tackle new challenges.</li>
						<li><strong>Immersive Visual Aesthetics:</strong> Carefully crafted graphics to provide an immersive and realistic visual experience.</li>
					</ul>

					<p>These simulation games offer an authentic gaming experience, emphasizing immersion and realistic management for simulated challenge enthusiasts.</p>
				</div>

				<div class="grid-item image1">
					<img src="../../photo/Simulation/Présentation/photo-simulation-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Celeste, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Cities Skylines 2</h2>
					<p>Cities Skylines 2 offers a realistic city-building experience, challenging players to develop and manage a thriving metropolis.</p>

					<ul>
						<li><strong>Urban Construction:</strong> Build a city by managing urban planning, infrastructure, and citizen needs.</li>
						<li><strong>Resource Management:</strong> Balance resources, economy, and services to ensure the growth of your city.</li>
						<li><strong>Strategic Expansion:</strong> Plan the expansion of your city precisely to maximize its efficiency.</li>
						<li><strong>Problem Solving:</strong> Tackle challenges such as traffic, pollution, and natural disasters.</li>
						<li><strong>Citizen Interaction:</strong> Respond to citizens' needs, monitor their happiness, and maintain public order.</li>
						<li><strong>Urban Aesthetics:</strong> Detailed graphics capturing the essence of modern metropolises.</li>
					</ul>

					<p>Cities Skylines 2 offers an immersive urban management experience, where every decision influences the development of your city.</p>
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
					<h2>Planet Zoo</h2>
					<p>Planet Zoo immerses you in the fascinating world of zoo management, where you can create and manage an environment conducive to animal life.</p>

					<ul>
						<li><strong>Habitat Creation:</strong> Design realistic enclosures for different species, considering their specific needs.</li>
						<li><strong>Species Management:</strong> Choose from a variety of animals and ensure their well-being, reproduction, and survival.</li>
						<li><strong>Visitor Interaction:</strong> Create educational and entertaining experiences for visitors, while adhering to conservation rules.</li>
						<li><strong>Conservation:</strong> Participate in preservation programs and contribute to the protection of endangered species.</li>
						<li><strong>Zoo Management:</strong> Make strategic decisions to ensure the financial success of your zoo while preserving the ecosystem.</li>
						<li><strong>Natural Aesthetics:</strong> Detailed graphics recreating the natural beauty of animal habitats.</li>
					</ul>

					<p>Planet Zoo offers an immersive zoo management experience, focusing on conservation and the well-being of animals.</p>
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
