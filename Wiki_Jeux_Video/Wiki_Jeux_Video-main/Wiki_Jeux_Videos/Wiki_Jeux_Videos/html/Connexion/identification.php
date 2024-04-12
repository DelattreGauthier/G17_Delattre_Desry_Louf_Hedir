<?php

	if(isset($_POST['log_in_EN'])){		
		//Créer le cookie pour y enregistrer le thème choisi par l'utilisateur
		setcookie('User_Pref',$_POST['Choixtheme'],time()+(365*24*3600),'/', '',false,true);
	}
    elseif(isset($_POST['log_in_FR'])){		
		//Créer le cookie pour y enregistrer le thème choisi par l'utilisateur
		setcookie('User_Pref',$_POST['Choixtheme'],time()+(365*24*3600),'/', '',false,true);
	}   
    elseif(isset($_POST['sign_in_EN'])){		
		//Créer le cookie pour y enregistrer le thème choisi par l'utilisateur
		setcookie('User_Pref',$_POST['Choixtheme'],time()+(365*24*3600),'/', '',false,true);
	}
    elseif(isset($_POST['sign_in_FR'])){		
		//Créer le cookie pour y enregistrer le thème choisi par l'utilisateur
		setcookie('User_Pref',$_POST['Choixtheme'],time()+(365*24*3600),'/', '',false,true);
	}
	header("Location: accueil.php");
	
	
?>