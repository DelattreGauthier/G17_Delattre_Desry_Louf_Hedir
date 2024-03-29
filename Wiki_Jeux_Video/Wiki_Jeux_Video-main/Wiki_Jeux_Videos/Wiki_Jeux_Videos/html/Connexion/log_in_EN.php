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
    <div class="language">
    	<a href="../Connexion/log_in.php" class="photo_language">
        	<div class="photo_language">
            	<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        	</div>
    	</a>
	</div>

    <main id="contact">
      <form class="formLetter" method="post" action="../../Accueil/accueil_EN.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Log in :</legend>
              
                <label for="email">Mail : </label >
                <input type="email" name="courriel" id="email"  pattern="^[a-zA-Z.\-]+@[a-zA-Z.]*(\.[a-z]{2,3})$" placeholder="Your mail" required>
                <br><br>

                <label for="motdepasse">Password : </label>
                <input type="text" name="motdepasse" id="motdepasse" placeholder="Your password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
                <p style="text-align: center;">If you forgot your password, <a class="probleme" href="../Contact/contact.php">please contact us</a> to recover your password </p>
                <br>

                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Log in">
                </div>

                

            </fieldset>
            
        </form>
    </main>
    <?php  include ('../../php/footer_EN.php'); ?>
  </body>

  </html>