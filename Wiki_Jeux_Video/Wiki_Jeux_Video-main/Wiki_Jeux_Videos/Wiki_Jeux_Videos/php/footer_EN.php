<footer>
	<div class="contacter">
		<h3>Contact Us</h3>
		<h3>Tel: 07 69 09 42 32</h3>
        <?php
        if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){
            echo"<h4> <a class='contact' href='../Contact/contact_connected_EN.php'>Contact Us</a> </h4>";
        }
        else{
            echo" <h4> <a class='contact' href='../Contact/contact_EN.php'>Contact Us</a></h4>";
        }
        ?>
	</div>
	<div class="a_propos">
		<h3>About Us</h3>
		<h3>Junia Website</h3>
		<h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Presentation</a></h4>
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
</footer>
