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
        <main>
        <label for="ville_naissance"> qQuelle est votre ville de naissance ?<span style="color: red; font-weight: bold;">*</span> :</label>
                <input type="text" name="ville_naissance" id="ville_naissance" placeholder="Votre ville de naissance" pattern="^[\p{L}\-' ]{1,40}$" required>
                <br><br>
        </main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>