<?php
    session_start();
    // Vérifie si l'utilisateur n'est pas authentifié, puis le redirige vers la page d'accueil en anglais
    if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false) {
        header("Location:../Accueil/accueil_EN.php");
        exit(); // Assure que le script s'arrête après la redirection
    }

    // Vérifie si le cookie de préférence linguistique n'est pas défini
    if (!isset($_COOKIE['language_preference'])) {
?>
    <!-- Affiche le sélecteur de langue si le cookie de préférence linguistique n'est pas défini -->
    <div class="language">
        <a href="../Contact/commentaire.php" class="photo_language">
            <div class="photo_language">
                <img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
            </div>
        </a>
    </div>
<?php
    }

    // Vérifie si le formulaire a été soumis
    if (isset($_POST["Envoyer"])) {
        // Vérifie si le commentaire a été saisi
        if (isset($_POST["description"])) {
            // Récupère l'adresse e-mail de l'utilisateur à partir de la session
            $courriel = $_SESSION["nom"];
            // Récupère le commentaire saisi dans le formulaire
            $commentaire = $_POST["description"];

            try {
                // Connexion à la base de données
                require("../Connexion/connexion.php");

                // Requête SQL pour insérer le commentaire dans la base de données
                $reqPrep = "INSERT INTO comment(Comment, Courriel) VALUES (:commentaire, :courriel)";
                
                // Préparation de la requête
                $req = $conn->prepare($reqPrep);

                // Exécution de la requête en liant les valeurs aux paramètres
                $req->execute(array(":commentaire" => $commentaire, ":courriel" => $courriel));

                // Fermeture de la connexion
                $conn = null;

                // Redirection vers la page d'accueil après l'envoi du commentaire
                header("Location: ../Accueil/accueil_EN.php");
                exit(); // Assure que le script s'arrête après la redirection
            } catch(Exception $e){
                // Gestion des erreurs
                die("Erreur : " . $e->getMessage());
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Video Game Wiki - Comment</title>
    <link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
    <link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
</head>

<body>
    <!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
    <?php include ('../../php/header_EN.php'); ?>

    <main id="contact">
        <form class="formLetter" method="post" action="">
            <fieldset> <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Leave a comment :</legend>

                <label for="description">Comment <span style="color: red; font-weight: bold;">*</span>:</label>
                <br>
                <textarea rows="10" cols="50" name="description" id="description" required minlength="10"></textarea>
                <br><br>

                <div class="contact_button">
                    <input type="submit" name="Envoyer" id="soumission" value="Send">
                    <input type="reset" value="Reset">
                </div>
            </fieldset>
        </form>
    </main>

    <?php include ('../../php/footer_EN.php'); ?>
</body>
</html>
