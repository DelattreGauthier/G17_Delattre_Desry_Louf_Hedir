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
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Admin/admin_EN.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>

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
                            <td><a class='website_link' href='../Connexion/modifier.php?identifiant=$row[Courriel]'>Modifier</a></td>
                            <td><a class='website_link' href='../Connexion/supprimer.php?identifiant=$row[Courriel]'>Supprimer</a></td>
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