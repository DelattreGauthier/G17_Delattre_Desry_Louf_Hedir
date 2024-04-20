<?php
	session_start();
	if(isset($_POST["sign_in"])){
		$login = $_SESSION["nom"];
		try{
			// Assurez-vous que la session 'nom' est définie avant de l'utiliser
			if(isset($_SESSION["nom"])){
				// Connexion à la base de données
				require("connexion.php");  
				// Requête SQL préparée pour éviter les injections SQL
				$reqPrep = "SELECT * FROM account WHERE Courriel = :login";
				// Exécution de la requête avec un paramètre lié
				$req = $conn->prepare($reqPrep);
				$req->bindParam(':login', $login, PDO::PARAM_STR);
				$req->execute();
				$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
			}
			// Fermeture de la connexion à la base de données
			$conn = null;
		} catch(Exception $e){
			// Gestion des erreurs
			echo 'Erreur : '.$e->getMessage();
		}
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
			<?php
				if(isset($_SESSION["Pseudonyme"], $_SESSION["Nom"], $_SESSION["Prenom"], $_SESSION["Courriel"], $_SESSION["Telephone"])){
					// Affichage des informations de l'utilisateur avec échappement des sorties
					echo "<h1>Profil de ".$resultat[0]["Pseudonyme"]."</h1>";
					echo "<p>Nom : ".$resultat[0]["Nom"]."</p>";
					echo "<p>Prénom : ".$resultat[0]["Prenom"]."</p>";
					echo "<p>Courriel : ".$resultat[0]["Courriel"]."</p>";
					echo "<p>Numéro de téléphone : ".$resultat[0]["Telephone"]."</p>";
				}
			?>
			<!-- Formulaire pour modifier les informations de l'utilisateur -->
			<form action="modifier_profil.php" method="post">
				<h2>Modifier les informations</h2>
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom" required>
				<label for="prenom">Prénom :</label>
				<input type="text" id="prenom" name="prenom" required>
				<label for="courriel">Courriel :</label>
				<input type="email" id="courriel" name="courriel" required>
				<label for="telephone">Numéros de téléphone :</label>
				<input type="tel" id="telephone" name="telephone" required>
				<input type="submit" value="Modifier">
			</form>
			<?php
			if(isset($_POST["modifier"])){
				try{
					require("../Connexion/connexion.php");
					$reqPrep="UPDATE account SET Nom = :nom, Prenom = :prenom, Courriel = :courriel, Telephone = :tel WHERE Courriel = '".$login."'";
					$req = $conn->prepare($reqPrep);
					$reqTab=array(":nom"=>$_POST["nom"],":prenom"=>$_POST["prenom"],":courriel"=>$_POST["courriel"],":tel"=>$_POST["telephone"]);
					$req->execute($reqTab);
					$conn= NULL;
					header("Location:profil.php");
				}
				catch(Exception $e){
					die("Erreur : " . $e->getMessage());
				}
			}
			?>
				<!-- Formulaire pour supprimer le compte de l'utilisateur -->
			<form action="supprimer_compte.php" method="post">
				<h2>Supprimer le compte</h2>
				<input type="submit" value="Supprimer">
			</form>
			<?php
			if(isset($_POST["supprimer"])){
				try{
					require("../Connexion/connexion.php");
					$reqPrep="DELETE FROM account WHERE Courriel = '".$login."'";
					$req = $conn->prepare($reqPrep);
					$req->execute();
					$conn= NULL;
					header("Location:../Accueil/accueil.php");
				}
				catch(Exception $e){
					die("Erreur : " . $e->getMessage());
				}
			}
			?>
		</main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>