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
                <legend>Se connecter :</legend>
              
                <label for="email">Courriel : </label >
                <input type="email" name="courriel" id="email"  pattern="^[a-zA-Z.\-]+@[a-zA-Z.]*(\.[a-z]{2,3})$" placeholder="Votre email" required>
                <br><br>

                <label for="motdepasse">Mot de Passe : </label>
                <input type="text" name="motdepasse" id="motdepasse" placeholder="Votre mot de passe" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
                <p style="text-align: center;">Si vous avez oublié votre mot de passe, <a class="probleme" href="../Contact/contact.php">contactez-nous</a> pour le récupérer </p>
                <br>

                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Connexion">
                </div>

                

            </fieldset>
            
        </form>
    </main>
    <?php  include ('../../php/footer.php'); ?>
  </body>

  </html>