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
  <?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Contact/contact.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>
    <main id="contact">
        <form class="formLetter" method="post" action="../Accueil/accueil.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Contact us <br><br></legend>
                <legend>Your Information:</legend>
                <br><br>
            
            <fieldset>
                <label>Your Request<span style="color: red; font-weight: bold;">*</span>:</label>
                <select id="objet" name="objet">
                    <option value="0">- Select -</option>
                    <option value="sugg">Suggestions</option>
                    <option value="prob">Technical Issues</option>
                </select>
                
                <br><br>
          
                <label for="description">Message <span style="color: red; font-weight: bold;">*</span>:</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="50"></textarea>
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