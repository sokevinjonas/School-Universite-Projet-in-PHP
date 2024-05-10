<?php 
// Vérification des données envoyées par le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de la présence des champs requis
    if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['dateNaisse']) || empty($_POST['LieuNaisse']) || empty($_POST['filiere']) || empty($_POST['genre']) || empty($_POST['classe'])) {
        // Affichage d'un message d'erreur si un champ est vide
        echo "<p class='error'>Veuillez remplir tous les champs.</p>";
    } else {
        include_once('bd.php');

        // Récupération des données du formulaire
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $date_naissance = $_POST['dateNaisse'];
        $lieu_naissance = trim($_POST['LieuNaisse']);
        $filiere = trim($_POST['filiere']);
        $genre = $_POST['genre'];
        $classe = trim($_POST['classe']);
        // $date_inscription = $_POST['date_inscription'];

        // Insertion des données dans la base de données
        $query = $bdd->prepare("INSERT INTO etudiant (nom, prenom, lieuNaissance, dateNaissance, filiere, genre, classe) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute([$nom, $prenom, $date_naissance, $lieu_naissance, $filiere, $genre, $classe]);

        // Message de succès
        echo "<p class='success'>Étudiant ajouté avec succès !</p>";
    }
}
?>