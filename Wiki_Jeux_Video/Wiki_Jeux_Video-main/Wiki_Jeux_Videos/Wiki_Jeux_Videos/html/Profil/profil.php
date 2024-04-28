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
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Profil/profil_EN.php" class="photo_language">
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
			<div class="grid-item eltA">
				<?php
				// Affichage des informations de l'utilisateur avec échappement des sorties
				echo "<h1>Profil de " . $resultats[0]["Pseudonyme"] . "</h1>";
				echo "<h3>Nom : " . $resultats[0]["Nom"] . "</h3>";
				echo "<h3>Prenom : " . $resultats[0]["Prenom"] . "</h3>";
				echo "<h3>Adresse : " . $resultats[0]["Courriel"] . "</h3>";
				echo "<h3>Numéro de téléphone : " . $resultats[0]["Telephone"] . "</h3>";

				// Vérifier si l'utilisateur est un administrateur
				if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {
					// Affichage de la liste de tous les commentaires
					try {
						require("../Connexion/connexion.php");

						$reqPrep = "SELECT Id, Courriel, Comment FROM comment";
						$req = $conn->prepare($reqPrep);
						$req->execute();
						$resultats = $req->fetchAll(PDO::FETCH_ASSOC);

						echo "<h2>Liste de tous les commentaires :</h2>";
						echo "<ul>";
						foreach ($resultats as $comment) {
							echo "<li>Commentaire #" . $comment['Id'] . " : " . $comment['Comment'] . " (par " . $comment['Courriel'] . ")</li>";
							echo"<br>";
						}
						echo "</ul>";

						$conn = null;
					} catch (Exception $e) {
						echo "Erreur : " . $e->getMessage();
					}
				} else {
					// Affichage de la liste des commentaires de l'utilisateur
					try {
						require("../Connexion/connexion.php");

						$reqPrep = "SELECT Id, Comment FROM comment WHERE Courriel = :courriel";
						$req = $conn->prepare($reqPrep);
						$req->execute(array(":courriel" => $_SESSION['nom']));
						$resultats = $req->fetchAll(PDO::FETCH_ASSOC);

						echo "<h2>Vos commentaires :</h2>";
						echo "<ul>";
						foreach ($resultats as $comment) {
							echo "<li>Commentaire #" . $comment['Id'] . " : " . $comment['Comment'] . "</li>";
							echo"<br>";
						}
						echo "</ul>";

						$conn = null;
					} catch (Exception $e) {
						echo "Erreur : " . $e->getMessage();
					}
				}
				if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){ // si un utilisateur est authentifié
					echo"<div class='connexion'>";
					if(isset($_SESSION["admin"])&& $_SESSION["admin"]==true){
						echo"<a class='connexion-button' href='../Admin/admin_EN.php'>Base de donnée</a><br>";
					}
					
						echo"<a class='connexion-button' href='../Connexion/log_out.php'>Déconnexion</a>";
					echo"</div>";

				}
				?>
			</div>
		</main>
 
		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>