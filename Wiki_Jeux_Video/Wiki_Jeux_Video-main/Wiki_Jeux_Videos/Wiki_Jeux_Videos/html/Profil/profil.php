<?php
	session_start();
<<<<<<< HEAD
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
	?>
=======
>>>>>>> 4f1898cdaba3660414095661dd651644a0831c46
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
<<<<<<< HEAD
			<div class="grid-item eltA">

			<?php
			// Affichage des informations de l'utilisateur avec échappement des sorties
				echo "<h1>Profil de ".$resultats[0]["Pseudonyme"]."</h1>";
				echo "<h3>Nom :".$resultats[0]["Nom"]."</h3>";
				echo "<h3>Prenom :".$resultats[0]["Prenom"]."</h3>";
				echo "<h3>Adresse :".$resultats[0]["Courriel"]."</h3>";
				echo "<h3>Numéro de téléphone :".$resultats[0]["Telephone"]."</h3>";
			?>
            </div>			
=======
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
>>>>>>> 4f1898cdaba3660414095661dd651644a0831c46
		</main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>