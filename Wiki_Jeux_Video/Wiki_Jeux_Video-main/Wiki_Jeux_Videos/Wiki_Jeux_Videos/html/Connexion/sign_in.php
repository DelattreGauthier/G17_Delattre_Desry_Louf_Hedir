<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Wiki Jeux Vidéo - S'inscrire</title>
    <link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
    <link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
    <!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
    <?php  include ('../../php/header.php'); ?>
    <div class="language">
    		<a href="../Connexion/sign_in_EN.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

    <main id="contact">
      <form class="formLetter" method="post" action="ajouter.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>S'inscrire :</legend>
                <label for="nom">Nom<span style="color: red; font-weight: bold;">*</span> :</label >
                <input type="text" name="nom" id="nom"  minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Votre nom" required>
                <br><br>

                <label for="prenom">Prénom<span style="color: red; font-weight: bold;">*</span> :</label >
                <input type="text" name="prenom" id="prenom"  minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Votre prénom" required>
                <br><br>
                
                <label for="email">Courriel<span style="color: red; font-weight: bold;">*</span> : </label >
                <input type="email" name="courriel" id="email" pattern="^[a-zA-Z0-9.\-]+@[a-zA-Z.]*(\.[a-z]{2,3})$" placeholder="Votre email" required>
                <br><br>

                <label for="telephone">Téléphone<span style="color: red; font-weight: bold;">*</span> : </label>
                <input type="tel" name="telephone" id="telephone" pattern="^0[0-9]{9}$" placeholder="Votre numéro de téléphone" required>
                <br><br>

                <label for="pseudonyme">Pseudonyme<span style="color: red; font-weight: bold;">*</span> :</label>
                <input type="text" name="pseudonyme" id="pseudonyme" minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Votre pseudonyme" required>
                <br><br>

                <label for="motdepasse">Mot de Passe (Plus de 8 caractères dont 1 chiffre minimum)<span style="color: red; font-weight: bold;">*</span> :</label>
                <input type="text" name="motdepasse" id="motdepasse" placeholder="Votre mot de passe" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
            </fieldset>
            
            <fieldset> 
                <label for="document">Photo de profil <span style="color: red; font-weight: bold;">*</span>: </label>
                <input type="file" id="document" required name="document">
                <br><br>
                <div class="contact_button">
                  <input type="submit"  name="sign_in" id="soumission" value="Inscription">
                  <input type="reset">
                </div>
            </fieldset>
        <p>
          <b style = "color: red">*</b> : saisie obligatoire
        </p>

        </form>
    </main>
    <?php  include ('../../php/footer.php'); ?>
  </body>

  </html>