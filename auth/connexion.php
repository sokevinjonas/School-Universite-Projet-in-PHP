<?php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le fichier de connexion à la base de données
    include_once('bd.php');

    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Préparer la requête SQL pour vérifier l'existence du personnel
    $query = $bdd->prepare("SELECT * FROM personnel WHERE email = ?");
    $query->execute([$email]);

    // Vérifier si l'email existe dans la base de données
    if ($query->rowCount() > 0) {
        // Récupérer les informations du personnel
        $personnel = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si le mot de passe correspond
        if ($personnel['mot_de_passe'] === $mot_de_passe) {
            // Démarrer la session
            session_start();
            // Authentification réussie, créer la session
            $_SESSION['personnel_id'] = $personnel['id'];
            $_SESSION['personnel_email'] = $personnel['email'];
            
            // Redirection vers une page sécurisée ou la page d'accueil
            header("Location: ../index.php");
            exit;
        } else {
            // Mot de passe incorrect, afficher un message d'erreur
            $_SESSION['error_message'] = "Mot de passe incorrect.";
            echo "Mot de passe incorrect, afficher un message d'erreur";
            // header("Location: /projet_web/pages/connexion.php");
            exit;
        }
    } else {
        // L'email n'existe pas, afficher un message d'erreur
        $_SESSION['error_message'] = "Email non trouvé.";
        echo "L'email n'existe pas, afficher un message d'erreur";
        // header("Location: /projet_web/pages/connexion.php");
        exit;
    }
} else {
    // Redirection vers la page de connexion si le formulaire n'a pas été soumis
    echo "Redirection vers la page de connexion si le formulaire n'a pas été soumis";
    // header("Location: /projet_web/pages/connexion.php");
    exit;
}
?>