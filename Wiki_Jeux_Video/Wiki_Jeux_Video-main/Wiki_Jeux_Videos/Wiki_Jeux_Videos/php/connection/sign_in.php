<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Wiki Jeux Vidéo - Contact</title>
    <link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
    <link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
    <!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
    <?php  include ('../../php/header.php'); ?>

    <main id="contact">
      <form class="formLetter" method="post" action="../../Accueil/accueil.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>S'inscrire :</legend>
                <label for="nom">Nom (Obligatoire) :</label >
                <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
                <br><br>

                <label for="prenom">Prénom (Obligatoire) :</label >
                <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required>
                <br><br>
                
                <label for="email">Courriel (Obligatoire) : </label >
                <input type="email" name="courriel" id="email" placeholder="Votre email" required>
                <br><br>

                <label for="telephone">Téléphone (Obligatoire) : </label>
                <input type="tel" name="telephone" id="telephone" placeholder="Votre numéro de téléphone" required>
                <br><br>

                <label for="pseudonyme">Pseudonyme (Obligatoire) :</label>
                <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Votre pseudonyme">
                <br><br>

                <label for="motdepasse">Mot de Passe (Plus de 8 caractères dont 1 chiffre minimum) :</label>
                <input type="text" name="motdepasse" id="motdepasse" placeholder="Votre mot de passe">
            </fieldset>
            
            <fieldset> 
                <label for="document">Photo de profil (Facultatif) :</label>
                <input type="file" id="document" name="document">
                <br><br>
                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Envoyer">
                  <input type="reset">
                </div>
            </fieldset>
        
        </form>
    </main>
    <?php  include ('../../php/footer.php'); ?>
  </body>

  </html>