<?php
	session_start();
	if(isset($_SESSION["authentifie"]) && $_SESSION["authentifie"] == true){
		$email = $_SESSION["nom"];
		try{
			// Connexion à la base de données
			require("../Connexion/connexion.php");  
			// Vérification de la méthode POST
			if (isset($_POST[''])) {
				// Récupération des données du formulaire
				$demande = $_POST["objet"];
				$message = $_POST["description"];
				// Requête SQL pour insérer les données dans la table contact_connected
				$query = "INSERT INTO contact_connected (Demande_contact_connected, Message_contact_connected, Courriel) VALUES (:demande, :message, :courriel)";
				// Préparation de la requête
				$statement = $conn->prepare($query);
				// Liaison des paramètres
				$params = array(":demande" => $demande, ":message" => $message, ":courriel" => $email);
				// Exécution de la requête
				$statement->execute($params);
				// Redirection vers la page d'accueil après l'envoi du formulaire
				header("Location:../Accueil/accueil.php");
				exit(); // Assure que le script s'arrête après la redirection
			}
		} catch(Exception $e){
			die("Erreur : " . $e->getMessage());
		}
	}
	else{
		header("Location:../Accueil/accueil_EN.php"); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Video Game Wiki - Contact</title>
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
            <a href="../Contact/contact_connected.php" class="photo_language">
                <div class="photo_language">
                    <img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
                </div>
            </a>
        </div>
    <?php
        }
    ?>
    <main id="contact">
        <form class="formLetter" method="post" action="">
          <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                  <legend>Contact us <br><br></legend>
                  <br><br>
              
              <fieldset>
                  <label>Your Request<span style="color: red; font-weight: bold;">*</span>:</label>
                  <select id="objet" name="objet">
                      <option value="none">- Select -</option>
                      <option value="sugg">Suggestions</option>
                      <option value="prob">Technical Issues</option>
                  </select>
                  
                  <br><br>

                    <label for="description">Message <span style="color: red; font-weight: bold;">*</span>:</label>
                    <br>
                    <textarea rows="10" cols="50" name="description" id="description" required minlength="10"></textarea>
                    <br><br>

                    <div class="contact_button">
                        <input type="submit" name="Envoyer" id="soumission" value="Send">
                        <input type="reset" value="Reset" >
                    </div>
                </fieldset>

            </fieldset>

        </form>
    </main>
    <?php  include ('../../php/footer_EN.php'); ?>
</body>
</html>
