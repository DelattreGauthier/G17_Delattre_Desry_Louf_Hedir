<?php
	session_start();
  
	//Script du traitement du formulaire d'authentification
	if(isset($_POST["log_in"])){
    $login=$_POST['courriel'];
		$mdp=$_POST['motdepasse'];
    try{
      require("../Connexion/connexion.php");               
      
      $reqPrep = "SELECT DISTINCT Courriel,Mot_de_Passe FROM account WHERE  Courriel='".$login."'";
        
      $req = $conn->prepare($reqPrep);
      $req->execute();
      $resultat=$req->fetchALL(PDO::FETCH_ASSOC);
      $conn= NULL;

    }                 
    catch(Exception $e){
      die("Erreur : " . $e->getMessage());
    }
		
		if($login==$resultat[0]["Courriel"] && $mdp==$resultat[0]["Mot_de_Passe"]){ //si un utilisateur normal (client): s'assurer que le nom et le mot-de-passe sont corrects
      $_SESSION["nom"]=$login; //Variable de session "nom"
			$_SESSION["authentifie"]=true;//Variable de session "authentifie"
      if ($login=="admin.wiki@jeux.videos.com" && $mdp=="123Admin123"){//si utilisateur Admin
        $_SESSION["admin"]=true;//Variable de session "admin"
      }
      else{
        $_SESSION["admin"]=false; //Variable de session "admin"
      }
			
      header("Location:../Accueil/accueil_EN.php"); 
		}
		else if ($login=="admin.wiki@jeux.videos.com" && $mdp=="123Admin123"){//si utilisateur Admin
			$_SESSION["nom"]=$login;//Variable de session "nom"
			$_SESSION["authentifie"]=true;//Variable de session "authentifie"
			$_SESSION["admin"]=true;//Variable de session "admin"
      header("Location:../Accueil/accueil_EN.php");
      
		}
    else if ($mdp!=$resultat["Mot_de_Passe"]) {
      session_destroy();
      echo"<h2 style='text-align: center; color: #FF595A;'>L'adresse ou le mot de passe est incorrect</h2>";
    }
	}	  

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Wiki Jeux Vidéo - Log In</title>
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
					<a href="../Connexion/log_in.php" class="photo_language">
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
                <legend>Log in :</legend>
              
                <label for="email">Mail : </label >
                <input type="email" name="courriel" id="email"  pattern="^[a-zA-Z0-9.\-]+@[a-zA-Z.]*(\.[a-z]{2,3})$" placeholder="Your mail" required>
                <br><br>

                <label for="motdepasse">Password : </label>
                <input type="text" name="motdepasse" id="motdepasse" placeholder="Your password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
                <p style="text-align: center;">If you forgot your password, <a class="probleme" href="../Contact/contact.php">please contact us</a> to recover your password </p>
                <br>

                <div class="contact_button">
                  <input type="submit" name="log_in" id="soumission" value="Log in">
                </div>

                

            </fieldset>
            
        </form>
    </main>
    <?php  include ('../../php/footer_EN.php'); ?>
  </body>

  </html>