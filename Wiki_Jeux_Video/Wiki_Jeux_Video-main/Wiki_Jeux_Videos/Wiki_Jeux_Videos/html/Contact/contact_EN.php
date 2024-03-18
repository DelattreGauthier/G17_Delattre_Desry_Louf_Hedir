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

    <main id="contact">
        <form class="formLetter" method="post" action="../Accueil/accueil.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Your Information:</legend>
                
                <div class="genre">
                  <input type="radio" name="genre" id="mme" required>
                  <label for="mme">Ms</label>
                  <input type="radio" name="genre" id="mr">
                  <label for="mr">Mr</label>
                  <input type="radio" name="genre" id="autre">
                  <label for="autre">Other</label>
                </div>

                <br><br> <!-- La balise br sert à effectuer un retour à la ligne-->
                
                <label for="nom">Last Name (Required):</label >
                <input type="text" name="nom" id="nom" placeholder="Your Surname" required>
                <br><br>
                
                <label for="prenom">First Name (Required):</label >
                <input type="text" name="prenom" id="prenom" placeholder="Your First Name" required>
                <br><br>
                
                <label for="email">Email (Required):</label >
                <input type="email" name="courriel" id="email" placeholder="Your Email" required>
                <br><br>

                <label for="telephone">Phone (Required):</label>
                <input type="tel" name="telephone" id="telephone" placeholder="Your Phone Number" required>
                <br><br>

                <label for="pseudonyme">Username (Required for comments):</label>
                <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Your Username">
            </fieldset>
            
            <fieldset>
                <legend>Your Request :</legend>
                <label for="objet">Message Subject:</label>
                <select id="objet" name="objet">
                    <option value="0">- Select -</option>
                    <option value="sugg">Suggestions</option>
                    <option value="prob">Technical Issues</option>
                    <option value="com">Comments</option>
                </select>
                
                <br><br>
          
                <label for="description">Message (Required):</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="50"></textarea>
                <br><br>
                
                <label for="document">Attachment (Optional):</label>
                <input type="file" id="document" name="document">
                <br><br>
                <div class="contact_button">
                  <input type="submit" name="Envoyer" id="soumission" value="Send">
                  <input type="reset" value="Reset" >
                </div>
            </fieldset>
        </form>
    </main>
    <?php  include ('../../php/footer_EN.php'); ?>
  </body>
</html>