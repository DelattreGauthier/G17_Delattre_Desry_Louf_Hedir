<footer>
        <!-- Section "Nous contacter" -->
        <div class="contacter">
            <h3>Contact Us</h3>
            <h3>Tel: 07 69 09 42 32</h3>
            <?php
            // Vérifie si l'utilisateur est authentifié
            if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){
                // Si oui, affiche le lien vers le formulaire de contact connecté en français
                echo"<h4> <a class='contact' href='../Contact/contact_connected_EN.php'>Contact Us</a> </h4>";
            }
            else{
                // Sinon, affiche le lien vers le formulaire de contact en français
                echo" <h4> <a class='contact' href='../Contact/contact_EN.php'>Contact Us</a></h4>";
            }
            ?>
        
        </div>

        <div class="a_propos">
            <h3>            
                <?php 
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    echo 'About Us';
                }else{
                    echo 'Comment';
                }
                ?>
            </h3>
            
            <h3>            
                <?php 
                // Vérifie si l'utilisateur est authentifié
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    echo 'Junia Site';
                }else{
                    echo 'Form';
                }
                ?>
            </h3>
            <h4>            
                <?php 
                // Vérifie si l'utilisateur est authentifié
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    // Si non authentifié, affiche le lien vers la présentation en français
                    echo '<a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Presentation</a>';
                }else{
                    // Sinon, affiche le lien vers le formulaire de commentaire en français
                    echo '<a class="contact" href="../Contact/commentaire_EN.php">Comment</a>';
                }
                ?></h4>
    </div>
    <div id="Commentaire_footer" class="center-content">
        <?php
        try {
            require("../Connexion/connexion.php");

            // Requête SQL pour récupérer les commentaires avec les pseudos des utilisateurs
            $query = "SELECT c.Comment, a.Pseudonyme FROM comment c INNER JOIN account a ON c.Courriel = a.Courriel";
            $statement = $conn->prepare($query);
            $statement->execute();
            $resultats = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Affichage des commentaires
            echo "<h2>List of all comments :</h2>";
            echo "<ul>";
            foreach ($resultats as $comment) {
                echo "<strong>" . $comment['Pseudonyme'] . "</strong> : " . $comment['Comment'] . "</li>";
                echo "<br><br>";
            }
            echo "</ul>";

            $conn = null;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }

        ?>
    </div>
    <?php
    // Vérifier si le cookie a déjà été accepté
    $cookie_accepted = isset($_COOKIE['cookie_yes']);

    if (!$cookie_accepted && isset($_POST['accept_cookies'])) {
        // Si le cookie n'a pas été accepté et que l'utilisateur a cliqué sur "Accepter", définir le cookie
        if (setcookie('cookie_yes', 'accepted', time() + (3600 * 24 * 365), "/")) {
            echo "<!-- Cookie créé avec succès -->";
            $cookie_accepted = true; // Mettre à jour la variable pour éviter l'affichage du pop-up après avoir accepté les cookies
        } else {
            echo "<!-- Erreur lors de la création du cookie -->";
        }
    }
    // Si le cookie des cookies n'a pas été accepté, affiche le pop-up
    if (!$cookie_accepted) {
        echo '
        <div id="cookie-popup" class="cookie-popup">
            <div class="cookie-content">
                <form method="post">
                <p>This site uses cookies to enhance user experience. By continuing to use this site, you agree to our use of cookies. For more information, you can click <a href="../Cookies/cookies_EN.php">here</a></p>
                    <br>
                    <button type="submit" name="accept_cookies" value="yes">Accepter</button>
                </form>
            </div>
        </div>
        ';
    }
    ?>
</footer>