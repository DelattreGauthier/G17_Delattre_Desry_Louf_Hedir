<?php
	session_start();

	// Vérifie si l'utilisateur est authentifié en tant qu'admin
	if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false || !isset($_SESSION["admin"]) || $_SESSION["admin"] == false) {
		header("Location:../Accueil/accueil.php");
		exit(); // Assure que le script s'arrête après la redirection
	}

	// Vérifie si un identifiant de compte a été passé dans l'URL
	if (isset($_GET["identifiant"])) {
		try {
			require("connexion.php");

			$identifiant = $_GET["identifiant"];

			// Sélectionne les informations du compte correspondant à l'identifiant
			$reqPrep = "SELECT * FROM account WHERE Courriel = :identifiant";
			$req = $conn->prepare($reqPrep);
			$req->execute(array(":identifiant" => $identifiant));
			$affichage = $req->fetch(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			die("Erreur : " . $e->getMessage());
		}
	}

	// Vérifie si le formulaire de modification a été soumis
	if (isset($_POST["modifier"])) {
		$courriel = $_POST["courriel"]; // Récupérer les valeurs à modifier
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$tel = $_POST["telephone"];
		$pseudo = $_POST["pseudonyme"];
		$mdp = $_POST["motdepasse"];

		try {
			require("connexion.php");

			// Requête SQL pour mettre à jour les informations du compte
			$reqPrep = "UPDATE account SET Nom = :nom, Prenom = :prenom, Telephone = :tel, Pseudonyme = :pseudo, Mot_de_Passe = :mdp WHERE Courriel = :courriel";
			$req = $conn->prepare($reqPrep);
			$req->execute(array(":nom" => $nom, ":prenom" => $prenom, ":courriel" => $courriel, ":tel" => $tel, ":pseudo" => $pseudo, ":mdp" => $mdp));

			
			header("Location:../Admin/admin.php");
			exit();
		} catch (Exception $e) {
			die("Erreur : " . $e->getMessage());
		}

	}
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Modifier</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php include ('../../php/header.php');?>
		<!-- Sélecteur de langue -->
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Connexion/modifier_EN.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>
 
		<!-- Contenu principal -->
		<main id="modifier_formulaire">
			<div class="grid-item eltA">
				<legend>Modifier un adhérent</legend>
					<form action="modifier.php" method="post">
						<fieldset>
							<legend>Modifier votre profil</legend>

							<input type="hidden" name="courriel"  value="<?php echo $affichage['Courriel']; ?>">

							<label for="nom">Nom : </label>
							<input type="text" id="nom" maxlength="20" name="nom" pattern="^[\p{L}\-' ]{1,40}$" value="<?php echo $affichage['Nom']; ?>"><br/>
							
							<label for="prenom">Prénom : </label>
							<input type="text" id="prenom" maxlength="20" name="prenom" pattern="^[\p{L}\-' ]{1,40}$" value="<?php echo $affichage['Prenom']; ?>"><br/>
							
							<label for="telephone">Téléphone : </label>
							<input type="tel" id="telephone" maxlength="10" name="telephone"  pattern="^0[0-9]{9}$" value="<?php echo $affichage['Telephone']; ?>"><br/>

							<label for="pseudo">Pseudo : </label>
							<input type="text" id="pseudo" maxlength="20" maxlength="20" name="pseudonyme" pattern="^[\p{L}\-' ]{1,40}$" value="<?php echo $affichage['Pseudonyme']; ?>"><br/>

							<label for="password">Mot de passe : </label>
							<input type="password" id="mdp" maxlength="20" name="motdepasse" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" value="<?php echo $affichage['Mot_de_Passe']; ?>"><br/>
								
							<input class="modifier_button" type="submit" name="modifier" value="✅">

						</fieldset>
					</form>
			</div>
		</main>

		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>