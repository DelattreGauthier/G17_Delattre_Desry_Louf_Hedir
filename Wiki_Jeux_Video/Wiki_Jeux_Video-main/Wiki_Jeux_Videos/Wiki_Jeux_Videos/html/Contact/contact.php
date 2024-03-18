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
            </fieldset>
            
            <fieldset>
                <legend>Votre demande :</legend>
                <label for="objet">Objet du message :</label>
                <select id="objet" name="objet">
                    <option value="0">- Sélectionner -</option>
                    <option value="sugg">Suggestions</option>
                    <option value="prob">Problèmes techniques</option>
                    <option value="com">Commentaires</option>
                </select>
                
                <br><br>
          
                <label for="description">Message (Obligatoire) :</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="50"></textarea>
                <br><br>
                
                <label for="document">Document (Facultatif) :</label>
                <input type="file" id="document" name="document">
                <br><br>
                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Envoyer">
                  <input type="reset">
                </div>
            </fieldset>
        
        </form>
    </main>
    <footer>
        <div class="contacter">
          <h3>Nous contacter</h3>
          <h3>Tel: 07 69 09 42 32</h3>
          <h4><a class="contact" href="../Contact/contact.php">Formulaire</a></h4>
        </div>
        <div class="a_propos">
          <h3>A propos de nous</h3>
          <h3>Site Junia</h3>
          <h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Présentation</a></h4>
        </div>
        
    </footer>
  </body>

  </html>