<?php 
// Démarrer la session
session_start();
// Vérification des données envoyées par le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de la présence des champs requis
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['date_de_naissance']) || empty($_POST['pays']) || empty($_POST['email']) || empty($_POST['mot_de_passe'])) {
        // Affichage d'un message d'erreur si un champ est vide
        
        header("Location: /projet_web/pages/personnels/ajouter-personnels.php?error_message=Veuillez remplir tous les champs.");
    } else {
        include_once('bd.php');

        // Récupération des données du formulaire
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $date_de_naissance = $_POST['date_de_naissance'];
        $pays = trim($_POST['pays']);
        $email = trim($_POST['email']);
        $mot_de_passe = trim($_POST['mot_de_passe']);
        // $date_inscription = $_POST['date_inscription'];

        // Insertion des données dans la base de données
        $query = $bdd->prepare("INSERT INTO personnel (nom, prenom, date_de_naissance, pays, email, mot_de_passe) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute([$nom, $prenom, $date_de_naissance, $pays, $email, $mot_de_passe]);

        // Redirection vers la même page avec un message de succès
        header("Location: /projet_web/pages/personnels/ajouter-personnels.php?message=Personnel ajouté avec succès !");
        exit;
    }
}
?>