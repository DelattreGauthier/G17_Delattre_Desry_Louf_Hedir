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
    <form class="formLetter" method="post" action="../Accueil/accueil.php">
            &nbsp&nbsp&nbsp&nbsp Déjà un compte ? <a href="../Connexion/log_in.php">se connecter</a>      
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Informations sur vous :</legend>
                <div class="genre">
                  <input type="radio" name="genre" id="mme" required>
                  <label for="mme">Madame</label>
                  <input type="radio" name="genre" id="mr">
                  <label for="mr">Monsieur</label>
                  <input type="radio" name="genre" id="autre">
                  <label for="autre">Autre</label>
                </div>
                <br><br> <!-- La balise br sert à effectuer un retour à la ligne-->
				
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

                <label for="pseudonyme">Pseudonyme (Obligatoire pour les commentaires) :</label>
                <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Votre pseudonyme">

                <label for="description">Laisser un commentaire :</label>
                <br>
                <textarea rows="10" cols="50" name="commentaire" id="commentaire" required minlength="50"></textarea>
                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Envoyer">
                  <input type="reset">
                </div>
            </fieldset>   
    </main>
    <?php  include ('../../php/footer.php'); ?>
  </body>

  </html>