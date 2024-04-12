<?php

	if(isset($_POST["sign_in"])){
        
		try{
			require("connexion.php");               
			
			$reqPrep="INSERT INTO account(Nom,Prenom,Courriel,Telephone,Pseudonyme,Mot_de_Passe,Photo_de_Profil)
						VALUES (:nom,:prenom,:courriel,:tel,:pseudo,:mdp,:photo)";//La requere SQL SELECT
				
			$req = $conn->prepare($reqPrep);//Préparer la requete
            
			$nom=$_POST["nom"];
			$prenom=$_POST["prenom"];
			$courriel=$_POST["courriel"];
			$tel=$_POST["telephone"];
            $pseudo=$_POST["pseudonyme"];
            $mdp=$_POST["motdepasse"];
            $photo=$_POST["document"];  

			$reqTab=array(":nom"=>$nom,":prenom"=>$prenom,":courriel"=>$courriel,":tel"=>$tel,":pseudo"=>$pseudo,":mdp"=>$mdp,":photo"=>$photo);
			$req->execute($reqTab);//Executer la requete
			
            
			$conn= NULL;

            header("Location:../Accueil/accueil.php");
		}                 
		catch(Exception $e){
			die("Erreur : " . $e->getMessage());
        }
	}

?>  