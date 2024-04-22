<?php
	session_start();
	if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"]==false){
		header("Location:../Accueil/accueil.php"); 
	}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Admin</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">

  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header.php'); ?>
		<!-- Sélecteur de langue -->
		<div class="language">
    		<a href="../Profil/admin_EN.php" class="photo_language">
        		<div class="photo_language">
            		<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
        		</div>
    		</a>
		</div>

		<!-- Contenu principal -->
		<main>
            <div class="center-content">
                <h1 >Base de données</h1>
                <h2 >Liste des Comptes</h2>
                <br>

                <?php
                    
                try{
                    require("../Connexion/connexion.php"); 
                            
                    $reqPrep="SELECT * FROM account";//La requête SQL SELECT
                    $req = $conn->prepare($reqPrep);//Préparer la requête
                    $req->execute();//Exécuter la requête
                            
                    $resultat = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat
                            
                    //Affichage sous forme d'un tableau
                    echo "<table>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Pseudonyme</th>
                            <th>Mot de passe</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>";
                    
                    foreach ($resultat as $row) {
                        echo "<tr>
                            <td>$row[Nom]</td>
                            <td>$row[Prenom]</td>
                            <td>$row[Courriel]</td>
                            <td>$row[Telephone]</td>
                            <td>$row[Pseudonyme]</td>
                            <td>$row[Mot_de_Passe]</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>";
                    }
                    echo "</table>";
                            
                    $conn=NULL;// On ferme la connexion						
                }                 
                catch(Exception $e){
                    echo "Erreur : " . $e->getMessage();
                }
                    
                ?>
            </div>
        </main>
    </body>
</html>