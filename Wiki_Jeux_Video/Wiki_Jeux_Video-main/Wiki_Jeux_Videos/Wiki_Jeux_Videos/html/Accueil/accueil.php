<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Accueil</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header.php'); ?>
		<!-- Sélecteur de langue -->
		<div class="language">
    		<a href="../Accueil/accueil_EN.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

		<!-- Contenu principal -->
		<main>
		  <section class="grid-container">
				<!-- Sections de grille avec titre, paragraphe et image illustrative -->
				<div class="grid-item eltA">
				  <h2>Explorez différents types de jeux vidéo</h2>
				  <p>Notre site offre une variété de catégories de jeux, des aventures aux simulations, en passant par les FPS et bien plus encore.</p>
				</div>
				<div class="grid-item image1">
				  <img src="../../photo/Accueil/photo1.png" alt="Image 1">
				</div>
				<div class="grid-item eltB">
				  <h2>Découvrez des critiques et des informations détaillées</h2>
				  <p>Nos articles fournissent des analyses approfondies, des critiques et des détails sur chaque jeu pour vous aider à faire votre choix.</p>
				</div>
				<div class="grid-item image2">
				  <img src="../../photo/Accueil/photo2.png" alt="Image 2">
				</div>
				<div class="grid-item eltC">
				  <h2>Partagez vos expériences et discutez avec la communauté</h2>
				  <p>Rejoignez notre communauté pour discuter, partager vos expériences de jeu et découvrir de nouveaux titres recommandés par d'autres joueurs passionnés.</p>
				</div>
				<div class="grid-item image3">
				  <img src="../../photo/Accueil/photo3.png" alt="Image 3">
				</div>
		  </section>
		</main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>
