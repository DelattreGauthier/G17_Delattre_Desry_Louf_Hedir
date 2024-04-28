<?php

// Vérifie si le formulaire a été soumis
if(isset($_POST["sign_in"])){
    // Récupère les données du formulaire
    $courriel = $_POST["courriel"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["telephone"];
    $pseudo = $_POST["pseudonyme"];
    $mdp = $_POST["motdepasse"];

    // Récupère la préférence linguistique choisie par l'utilisateur
    $language_preference = $_POST['language_preference'];

    try{
        require("connexion.php"); // Inclut le fichier de connexion à la base de données
        
        // Requête pour sélectionner l'email et le mot de passe associés à l'email fourni
        $reqPrep = "SELECT Courriel, Mot_de_Passe FROM account WHERE Courriel = :courriel";
        $req = $conn->prepare($reqPrep);
        $req->execute(array(":courriel" => $courriel));
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

        // Vérifie si des résultats sont retournés
        if($resultat){
            // Vérifie si l'email et le mot de passe correspondent à ceux de la base de données
            if($courriel == $resultat[0]["Courriel"] && $mdp == $resultat[0]["Mot_de_Passe"]){
                // Met à jour le compte existant
                $reqPrep = "UPDATE account SET Nom = :nom, Prenom = :prenom, Telephone = :tel, Pseudonyme = :pseudo, Mot_de_Passe = :mdp WHERE Courriel = :courriel";
            } else {
                // Redirige vers sign_in.php si le mot de passe est incorrect
                header("Location: sign_in.php");
                exit();
            }
        } else {
            // Insère un nouveau compte
            $reqPrep = "INSERT INTO account(Nom, Prenom, Courriel, Telephone, Pseudonyme, Mot_de_Passe) VALUES (:nom, :prenom, :courriel, :tel, :pseudo, :mdp)";
        }

        // Exécute la requête préparée avec les valeurs fournies
        $req = $conn->prepare($reqPrep);
        $req->execute(array(":nom" => $nom, ":prenom" => $prenom, ":courriel" => $courriel, ":tel" => $tel, ":pseudo" => $pseudo, ":mdp" => $mdp));

        // Définit le cookie de préférence linguistique
        setcookie('language_preference', $language_preference, time() + (3600 * 24 * 365), '/'); // Cookie valable pendant 1 an

        // Vérifie si le cookie de préférence linguistique est défini
        if (isset($_COOKIE['language_preference'])) {
            // Redirige vers la version correspondante de la page d'admin
            if ($_COOKIE['language_preference'] === "En") {
                header("Location: log_in_EN.php");
                exit();
            }
            else{
                header("Location: log_in.php");
            }
        }
        header("Location: log_in.php");
        exit();
    } catch(Exception $e){
        // Affiche un message d'erreur en cas d'exception
        die("Erreur : " . $e->getMessage());
    }
}
?>