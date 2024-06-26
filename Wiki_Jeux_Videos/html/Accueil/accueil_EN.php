<?php
// Vérifie si le cookie de préférence linguistique est défini
if (isset($_COOKIE['language_preference'])) {
    // Redirige vers la version correspondante de la page d'accueil
    if ($_COOKIE['language_preference'] === "Fr") {
        header("Location: ../Accueil/accueil.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Home</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>

  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header_EN.php');  ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Accueil/accueil.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>
		
		<!-- Contenu principal -->
		<main>
		  <section class="grid-container">
				<!-- Sections de grille avec titre, paragraphe et image illustrative -->
				<div class="grid-item eltA">
				  <h2>Explore Different Types of Video Games</h2>
				  <p>Our site offers a variety of game categories, from adventures to simulations, FPS, and much more.</p>
				</div>
				<div class="grid-item image1">
				  <img src="../../photo/Accueil/photo1.png" alt="Image 1">
				</div>
				<div class="grid-item eltB">
				  <h2>Discover Reviews and Detailed Information</h2>
				  <p>Our articles provide in-depth analyses, reviews, and details about each game to help you make informed choices.</p>
				</div>
				<div class="grid-item image2">
				  <img src="../../photo/Accueil/photo2.png" alt="Image 2">
				</div>
				<div class="grid-item eltC">
			      <h2>Share Your Experiences and Engage with the Community</h2>
				  <p>Join our community to discuss, share your gaming experiences, and discover new titles recommended by fellow passionate gamers.</p>
				</div>
				<div class="grid-item image3">
					<img src="../../photo/Accueil/photo3.png" alt="Image 3">
				</div>
		  </section>
		</main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer_EN.php'); ?>
  </body>
</html>
