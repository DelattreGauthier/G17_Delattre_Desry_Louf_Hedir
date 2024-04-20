<?php

	if(isset($_POST["sign_in"])){
		$courriel=$_POST["courriel"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];		
		$tel=$_POST["telephone"];
		$pseudo=$_POST["pseudonyme"];
		$mdp=$_POST["motdepasse"];

		try{
			require("connexion.php");               
			
			$reqPrep = "SELECT DISTINCT Courriel,Mot_de_Passe FROM account WHERE  Courriel=:courriel";
				
			$req = $conn->prepare($reqPrep);
			$reqTab=array(":courriel"=>$courriel);
			$req->execute($reqTab);
			$resultat=$req->fetchALL(PDO::FETCH_ASSOC);
			$conn= NULL;

		}                 
		catch(Exception $e){
		die("Erreur : " . $e->getMessage());
		}

		if($courriel==$resultat[0]["Courriel"] && $mdp==$resultat[0]["Mot_de_Passe"]){ //si un utilisateur normal (client): s'assurer que le nom et le mot-de-passe sont corrects
			try{
				require("connexion.php");               
				
				$reqPrep="UPDATE account 
					SET Nom=:nom,Prenom=:prenom,Courriel=:courriel,Telephone=:tel,Pseudonyme=:pseudo,Mot_de_Passe=:mdp
					WHERE Courriel=:courriel";
					
				$req = $conn->prepare($reqPrep);//Préparer la requete
				$reqTab=array(":nom"=>$nom,":prenom"=>$prenom,":courriel"=>$courriel,":tel"=>$tel,":pseudo"=>$pseudo,":mdp"=>$mdp);
				$req->execute($reqTab);//Executer la requete

				header("Location:log_in.php");
			}                 
			catch(Exception $e){
				die("Erreur : " . $e->getMessage());
			}
		}
		else if($courriel==$resultat[0]["Courriel"] && $mdp!=$resultat[0]["Mot_de_Passe"]){
			header("Location:sign_in.php");
		}
		else{
			try{
				require("connexion.php");               
				
				$reqPrep="INSERT INTO account(Nom,Prenom,Courriel,Telephone,Pseudonyme,Mot_de_Passe)
							VALUES (:nom,:prenom,:courriel,:tel,:pseudo,:mdp)";//La requere SQL SELECT
					
				$req = $conn->prepare($reqPrep);//Préparer la requete
				$reqTab=array(":nom"=>$nom,":prenom"=>$prenom,":courriel"=>$courriel,":tel"=>$tel,":pseudo"=>$pseudo,":mdp"=>$mdp);
				$req->execute($reqTab);//Executer la requete

				header("Location:log_in.php");
			}                 
			catch(Exception $e){
				die("Erreur : " . $e->getMessage());
			}
		}
	}

?>  