<?php
    if (isset($_GET["identifiant"])) {
        try {
            require("connexion.php");

            $identifiant = $_GET["identifiant"];
            
            // Sélectionne les informations du compte correspondant à l'identifiant
            $reqPrep = "DELETE FROM account WHERE Courriel = :identifiant";
            $req = $conn->prepare($reqPrep);
            $req->execute(array(":identifiant" => $identifiant));
            
			// Vérifie si le cookie de préférence linguistique est défini
			if (isset($_COOKIE['language_preference'])) {
                // Redirige vers la version correspondante de la page d'admin
                if ($_COOKIE['language_preference'] === "En") {
                    header("Location: ../Admin/admin_EN.php");
                    exit();
                }
            }
            else{
                header("Location:../Admin/admin.php");
            }
            
        } catch (Exception $e) {
            die("Erreur : " . $e->getMessage());
        }
        header("Location:../Admin/admin.php");
    }
?>  