<?php
    if (isset($_GET["identifiant"])) {
        try {
            require("connexion.php");

            $identifiant = $_GET["identifiant"];
            
            // Sélectionne les informations du compte correspondant à l'identifiant
            $reqPrep = "DELETE FROM account WHERE Courriel = :identifiant";
            $req = $conn->prepare($reqPrep);
            $req->execute(array(":identifiant" => $identifiant));
            
            
            header("Location:../Admin/admin.php");

            
        } catch (Exception $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
?>  