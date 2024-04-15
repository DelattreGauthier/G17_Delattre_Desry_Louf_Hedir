<?php 
	session_start(); //Démarrer la session
?>

<header>
		  <!-- Titre du site et navigation -->
		  <h1><a href="../Accueil/accueil_EN.php">Video Game Wiki</a></h1>
		  <nav>
				<!-- Navigation : Liste des types de jeux et sélecteur de langue -->
				<ul class="menu">
				  <li>
						<a class="liste" href="../Accueil/accueil_EN.php">Types of Games <span>&#9662;</span></a>
						<ul class="submenu">
						  <!-- Liste déroulante des catégories de jeux -->
						  <li><a href="../Aventures/aventures_EN.php">Adventure Games</a></li>
						  <li><a href="../Simulation/simulation_EN.php">Simulation Games</a></li>
						  <li><a href="../FPS/fps_EN.php">FPS</a></li>
						  <li><a href="../Arcade/arcade_EN.php">Arcade Games</a></li>
						  <li><a href="../Enigme/enigme_EN.php">Puzzle Games</a></li>
						  <li><a href="../Plateforme/plateforme_EN.php">Platformer Games</a></li>
						</ul>
				  </li>
				</ul>
				
		<?php
			if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true &&  $_SESSION["admin"]==true){ // si un utilisateur est authentifié
		?>
		<div class="connexion">
			<a class="connexion-button" href="../Connexion/log_out.php">Log out</a>
		</div>
			
		<?php
			}
			else{ // sinon on affiche le formulaire
		
		?>	
		<div class="connexion">
				<a class="connexion-button" href="../Connexion/log_in_EN.php">Log in</a>
				<a class="sign-button" href="../Connexion/sign_in_EN.php">Register</a>
		</div>
		<?php
			}
		?>
				
	</nav>
</header>