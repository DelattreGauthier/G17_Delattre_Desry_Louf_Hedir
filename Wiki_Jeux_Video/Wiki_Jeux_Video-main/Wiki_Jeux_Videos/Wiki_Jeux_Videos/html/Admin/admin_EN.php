<?php
	session_start();
	if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"]==false){
		header("Location:../Accueil/accueil.php"); 
	}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Admin</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header_EN.php'); ?>
		<!-- Sélecteur de langue -->
		<div class="language">
    		<a href="../Profil/admin.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

		<!-- Contenu principal -->
		<main>