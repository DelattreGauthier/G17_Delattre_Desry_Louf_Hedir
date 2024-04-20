<?php 
	session_start(); //Démarrer la session
?>

<header>
	<!-- Titre du site et navigation -->
	<?php
		if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true) { // si un utilisateur est authentifié
			try{
				require("../Connexion/connexion.php");               
				
				$reqPrep = "SELECT DISTINCT Pseudonyme FROM account WHERE  Courriel='".$_SESSION["nom"]."'";
					
				$req = $conn->prepare($reqPrep);
				$req->execute();
				$resultat=$req->fetchALL(PDO::FETCH_ASSOC);
				echo"<h1 style='text-align: center; color: #FF595A;'>Bonjour ".$resultat[0]["Pseudonyme"]."</h1>";

				$conn= NULL;

			}                 
			catch(Exception $e){
				die("Erreur : " . $e->getMessage());
			}
		}
	?>
	<h1><a href="../Accueil/accueil.php">Wiki Jeux Vidéo</a></h1>
	<nav>
		<!-- Navigation : Liste des types de jeux et sélecteur de langue -->
		<ul class="menu">
			<li>
				<a class="liste" href="../Accueil/accueil.php">Types de Jeux <span>&#9662;</span></a>
				<ul class="submenu">
				<!-- Liste déroulante des catégories de jeux -->
					<li><a href="../Aventures/aventures.php">Jeux d'Aventures</a></li>
					<li><a href="../Simulation/simulation.php">Jeux de Simulation</a></li>
					<li><a href="../FPS/fps.php">FPS</a></li>
					<li><a href="../Arcade/arcade.php">Jeux d'Arcade</a></li>
					<li><a href="../Enigme/enigme.php">Jeux d'Énigmes</a></li>
					<li><a href="../Plateforme/plateforme.php">Jeux de Plateformes</a></li>
				</ul>
			</li>
		</ul>
		
		<?php
			if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){ // si un utilisateur est authentifié
		?>
		<div class="connexion">
			
		<a href="../Profil/profil.php">
			<img src="../../photo/Profil/User_1.png" alt="Profil" style="margin-top:-45px;">
		</a>


			
		</div>
		
			
		<?php
			}
			else{ // sinon on affiche le formulaire
		
		?>	
		<div class="connexion">
			<a class="connexion-button" href="../Connexion/log_in.php">Se Connecter</a>
			<a class="sign-button" href="../Connexion/sign_in.php">S'inscrire</a>
		</div>
		<?php
			}
		?>		
	</nav>
</header>
