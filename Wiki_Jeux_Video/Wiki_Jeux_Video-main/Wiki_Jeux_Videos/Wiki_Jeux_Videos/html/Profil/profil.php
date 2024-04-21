<?php
	session_start();
	if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){
		$courriel = $_SESSION["nom"];
		try{
			// Connexion à la base de données
			require("../Connexion/connexion.php");  
			// Requête SQL préparée pour éviter les injections SQL
			$reqPrep = "SELECT Nom, Prenom, Courriel, Telephone, Pseudonyme FROM account WHERE Courriel = :courriel";
			// Exécution de la requête avec un paramètre lié
			$req = $conn->prepare($reqPrep);
			$reqTab = array(":courriel" => $courriel);
			$req->execute($reqTab);
			$resultats = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat
			$conn = null; // On ferme la connexion        
		
			echo"tet";
		} catch(Exception $e){
			die("Erreur : " . $e->getMessage());
		}
	}
	else{
		header("Location:../Accueil/accueil.php"); 
	}
	?>
<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Profil</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header.php'); ?>
		<!-- Sélecteur de langue -->
		<div class="language">
    		<a href="../Profil/profil_EN.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

		<!-- Contenu principal -->
		<main>
			<div class="grid-item eltA">

			<?php
			// Affichage des informations de l'utilisateur avec échappement des sorties
				echo "<h1>Profil de ".$resultats[0]["Pseudonyme"]."</h1>";
				echo "<h3>Nom :".$resultats[0]["Nom"]."</h3>";
				echo "<h3>Prenom :".$resultats[0]["Prenom"]."</h3>";
				echo "<h3>Adresse :".$resultats[0]["Courriel"]."</h3>";
				echo "<h3>Numéro de téléphone :".$resultats[0]["Telephone"]."</h3>";

				echo"</div>";
				if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){ // si un utilisateur est authentifié

						echo"<div class='connexion'>";
							echo"<a class='connexion-button' href='../Connexion/log_out.php'>Log out</a>";
						echo"</div>";

				}
			?>				
		</main>
 
		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>