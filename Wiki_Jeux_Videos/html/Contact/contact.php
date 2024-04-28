<?php
    // Vérifie si le formulaire de remise a été soumis
    if(isset($_POST["Remettre"])){
        // Récupération des données du formulaire
        $genre = $_POST["genre"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["courriel"];
        $telephone = $_POST["telephone"];
        $pseudonyme = $_POST["pseudonyme"];
        $demande = $_POST["objet"];
        $message = $_POST["description"];

        try {
            // Connexion à la base de données
            require("../Connexion/connexion.php");  
            // Requête SQL pour insérer les données dans la table contact_not_connected
            $query = "INSERT INTO contact_not_connected (Genre, Nom, Prenom, Courriel, Telephone, Pseudonyme, Demande, Message) VALUES (:genre, :nom, :prenom, :courriel, :telephone, :pseudonyme, :demande, :message)";
            // Préparation de la requête
            $statement = $conn->prepare($query);
            // Liaison des paramètres
            $params = array(":genre" => $genre, ":nom" => $nom, ":prenom" => $prenom, ":courriel" => $email, ":telephone" => $telephone, ":pseudonyme" => $pseudonyme, ":demande" => $demande, ":message" => $message);
            // Exécution de la requête
            $statement->execute($params);
            // Redirection vers la page d'accueil après l'envoi du formulaire
            header("Location:../Accueil/accueil.php");
            exit(); // Assure que le script s'arrête après la redirection
        } catch(Exception $e){
            // Gestion des erreurs
            echo "Erreur : " . $e->getMessage();
        }
    }
?>


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
    <?php
        // Vérifie si le cookie de préférence linguistique est défini
        if(!isset($_COOKIE['language_preference'])) {
    ?>
        <div class="language">
            <a href="../Contact/contact_EN.php" class="photo_language">
                <div class="photo_language">
                    <img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
                </div>
            </a>
        </div>
    <?php
        }
    ?>
    <main id="contact">
        <form class="formLetter" method="post" action="contact.php">
            <fieldset> <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Contactez-nous <br><br></legend>
                <label>Informations sur vous <span style="color: red; font-weight: bold;">*</span>:</label>
                <div class="genre">
                    <input type="radio" name="genre" id="mme" value="mme" required>
                    <label for="mme">Madame</label>
                    <input type="radio" name="genre" id="mr" value="mr">
                    <label for="mr">Monsieur</label>
                    <input type="radio" name="genre" id="autre" value="autre">
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

                <label for="pseudonyme">Pseudonyme<span style="color: red; font-weight: bold;">*</span>:</label>
                <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Votre pseudonyme">
            </fieldset>
            
            <fieldset>
                <label>Votre demande <span style="color: red; font-weight: bold;">*</span>:</label>
                <select id="objet" name="objet">
                    <option value="0">- Sélectionner -</option>
                    <option value="sugg">Suggestions</option>
                    <option value="prob">Problèmes techniques</option>
                </select>
                
                <br><br>
          
                <label for="description">Message <span style="color: red; font-weight: bold;">*</span>:</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="10"></textarea>
                <br><br>
                
                <div class="contact_button">
                  <input  type="submit" name="Remettre" id="soumission" value="Envoyer">
                  <input type="reset">
                </div>
            </fieldset>
        
        </form>
    </main>
    <?php  include ('../../php/footer.php'); ?>
</body>
</html>

