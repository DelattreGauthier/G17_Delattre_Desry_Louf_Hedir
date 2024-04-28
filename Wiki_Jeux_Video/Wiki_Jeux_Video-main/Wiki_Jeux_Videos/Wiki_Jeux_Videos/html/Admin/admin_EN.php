<?php
	session_start();
    //Vérification si connecté et si l'utilisateur est un administrateur
	if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false || !isset($_SESSION["admin"]) || $_SESSION["admin"] == false) {
		header("Location:../Accueil/accueil_EN.php");
		exit(); // Assure que le script s'arrête après la redirection
	}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Admin</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">

  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header_EN.php'); ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Admin/admin.php" class="photo_language">
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
                <h1 >Database</h1>
                <h2 >List of Accounts</h2>
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
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Mail</th>
                            <th>Phone number</th>
                            <th>Pseudo</th>
                            <th>Password</th>
                            <th>Modifie</th>
                            <th>Delete</th>
                        </tr>";
                    //Affichage des informations du tableau account de la base de donnée
                    foreach ($resultat as $row) {
                        echo "<tr>
                            <td>$row[Nom]</td>
                            <td>$row[Prenom]</td>
                            <td>$row[Courriel]</td>
                            <td>$row[Telephone]</td>
                            <td>$row[Pseudonyme]</td>
                            <td>$row[Mot_de_Passe]</td>
                            <td><a class='website_link' href='../Connexion/modifier_EN.php?identifiant=$row[Courriel]'>Modifie</a></td>
                            <td><a class='website_link' href='../Connexion/supprimer.php?identifiant=$row[Courriel]'>Delete</a></td>
                        </tr>";
                    }
                    echo "</table>";
                            
                    $conn=NULL;// On ferme la connexion						
                }                 
                catch(Exception $e){
                    echo "Erreur : " . $e->getMessage();
                }
                    
                ?>

                <br>
                <h2 >Requests from logged in users</h2>
                <br>

                <?php
                    
                try{
                    require("../Connexion/connexion.php"); 
                            
                    $reqPrep="SELECT * FROM contact_connected";//La requête SQL SELECT
                    $req = $conn->prepare($reqPrep);//Préparer la requête
                    $req->execute();//Exécuter la requête
                            
                    $resultat = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat
                            
                    //Affichage sous forme d'un tableau
                    echo "<table>
                        <tr>
                            <th>Request</th>
                            <th>Message</th>
                            <th>Email</th>
                            <th>Id</th>
                        </tr>";
                    //Affichage les informations du tableau contact_connected de la base de donnée
                    foreach ($resultat as $row) {
                        echo "<tr>";
                            if ($row['Demande_contact_connected']=='sugg'){
                                echo"<td>Suggestion</td>";
                            }
                            else if ($row['Demande_contact_connected']=='prob'){
                                echo"<td>Issue</td>";
                            }
                            else{
                                echo"<td>Not Precised</td>";
                            }
                            echo"<td>$row[Message_contact_connected]</td>
                            <td>$row[Courriel]</td>
                            <td>$row[Id]</td>
                        </tr>";
                    }
                    echo "</table>";
                            
                    $conn=NULL;// On ferme la connexion						
                }                 
                catch(Exception $e){
                    echo "Erreur : " . $e->getMessage();
                }
                    
                ?>

                <br>
                <h2 >Requests from unregistered users</h2>
                <br>

                <?php
                    
                try{
                    require("../Connexion/connexion.php"); 
                            
                    $reqPrep="SELECT * FROM contact_not_connected";//La requête SQL SELECT
                    $req = $conn->prepare($reqPrep);//Préparer la requête
                    $req->execute();//Exécuter la requête
                            
                    $resultat = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat
                            
                    //Affichage sous forme d'un tableau
                    echo "<table>
                        <tr>
                            <th>Gender</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Mail</th>
                            <th>Phone number</th>
                            <th>Pseudo</th>
                            <th>Request</th>
                            <th>Message</th>
                            <th>Id</th>
                        </tr>";
                    
                    foreach ($resultat as $row) {
                       //Affichage les informations du tableau contact_not_connected de la base de donnée
                        echo "<tr>
                        <td>$row[Genre]</td>
                        <td>$row[Nom]</td>
                        <td>$row[Prenom]</td>
                        <td>$row[Courriel]</td>
                        <td>$row[Telephone]</td>
                        <td>$row[Pseudonyme]</td>";
                            if ($row['Demande']=='sugg'){
                                echo"<td>Suggestion</td>";
                            }
                            else if ($row['Demande']=='prob'){
                                echo"<td>Issue</td>";
                            }
                            else{
                                echo"<td>Not Precised</td>";
                            }
                            echo"<td>$row[Message]</td>
                            
                            <td>$row[Id]</td>
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
        <?php  include ('../../php/footer_EN.php'); ?>
    </body>
</html>