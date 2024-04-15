<?php

session_start(); //Démarrer la session
	if($_SESSION["authentifie"]){ // si un utilisateur est authentifié (session en cours)
		unset($_SESSION["authentifie"],$_SESSION["nom"],$_SESSION["admin"]); //détruire les variables de sessions
		session_destroy();//détruire la session
		header("Location:../Accueil/accueil.php");
	}

?>