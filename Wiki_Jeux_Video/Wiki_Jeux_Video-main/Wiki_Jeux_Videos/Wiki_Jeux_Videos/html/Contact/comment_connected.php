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
    <!--$pseudonyme_connecte = "Pseudonyme_de_la_personne_connectée"; // Remplacez par le pseudonyme récupéré depuis la base de données
    // Ensuite, vous pouvez utiliser ce pseudonyme dans le formulaire HTML-->

    <main id="contact">
    <!--<div>
        <p>Pseudonyme : <?php echo $pseudonyme_connecte; ?></p> // j'ai essayé d'afficher le pseudo au dessus du commentaire voir avec la bdd
    </div>-->
    <form class="formLetter" method="post" action="../Accueil/accueil.php">  
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
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