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
    <div class="language">
    	<a href="../Contact/contact_EN.php" class="photo_language">
        	<div class="photo_language">
            	<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        	</div>
    	</a>
	  </div>
    <main id="contact">
      <form class="formLetter" method="post" action="../Accueil/accueil.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Contactez-nous <br><br></legend>
                <label>Informations sur vous <span style="color: red; font-weight: bold;">*</span>:</label>
                <div class="genre">
                  <input type="radio" name="genre" id="mme" required>
                  <label for="mme">Madame</label>
                  <input type="radio" name="genre" id="mr">
                  <label for="mr">Monsieur</label>
                  <input type="radio" name="genre" id="autre">
                  <label for="autre">Autre</label>
                </div>
                <br><br> <!-- La balise br sert à effectuer un retour à la ligne-->
				
                <label for="nom">Nom <span style="color: red; font-weight: bold;">*</span>:</label >
                <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
                <br><br>

                <label for="prenom">Prénom <span style="color: red; font-weight: bold;">*</span>:</label >
                <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required>
                <br><br>
                
                <label for="email">Courriel <span style="color: red; font-weight: bold;">*</span>: </label >
                <input type="email" name="courriel" id="email" placeholder="Votre email" required>
                <br><br>

                <label for="telephone">Téléphone <span style="color: red; font-weight: bold;">*</span>: </label>
                <input type="tel" name="telephone" id="telephone" placeholder="Votre numéro de téléphone" required>
                <br><br>

                <label for="pseudonyme">Pseudonyme :</label>
                <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Votre pseudonyme">
            </fieldset>
            
            <fieldset>
                <label>Votre demande <span style="color: red; font-weight: bold;">*</span>:</label>
                <label for="objet">Objet du message :</label>
                <select id="objet" name="objet">
                    <option value="0">- Sélectionner -</option>
                    <option value="sugg">Suggestions</option>
                    <option value="prob">Problèmes techniques</option>
                </select>
                
                <br><br>
          
                <label for="description">Message <span style="color: red; font-weight: bold;">*</span>:</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="50"></textarea>
                <br><br>
                
                <label for="document">Document :</label>
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