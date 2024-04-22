<?php

if(isset($_POST["sign_in"])){
    // Retrieve form data
    $courriel = $_POST["courriel"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["telephone"];
    $pseudo = $_POST["pseudonyme"];
    $mdp = $_POST["motdepasse"];

    try{
        require("connexion.php");
        
        $reqPrep = "SELECT Courriel, Mot_de_Passe FROM account WHERE Courriel = :courriel";
        $req = $conn->prepare($reqPrep);
        $req->execute(array(":courriel" => $courriel));
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

        // Check if any result is returned
        if($resultat){
            if($courriel == $resultat[0]["Courriel"] && $mdp == $resultat[0]["Mot_de_Passe"]){
                // Update existing account
                $reqPrep = "UPDATE account SET Nom = :nom, Prenom = :prenom, Telephone = :tel, Pseudonyme = :pseudo, Mot_de_Passe = :mdp WHERE Courriel = :courriel";
            } else {
                // Redirect to sign_in.php if password is incorrect
                header("Location: sign_in.php");
                exit();
            }
        } else {
            // Insert new account
            $reqPrep = "INSERT INTO account(Nom, Prenom, Courriel, Telephone, Pseudonyme, Mot_de_Passe) VALUES (:nom, :prenom, :courriel, :tel, :pseudo, :mdp)";
        }

        $req = $conn->prepare($reqPrep);
        $req->execute(array(":nom" => $nom, ":prenom" => $prenom, ":courriel" => $courriel, ":tel" => $tel, ":pseudo" => $pseudo, ":mdp" => $mdp));

        // Redirect to log_in.php after successful operation
        header("Location: log_in.php");
        exit();
    } catch(Exception $e){
        die("Erreur : " . $e->getMessage());
    }
}

?>  