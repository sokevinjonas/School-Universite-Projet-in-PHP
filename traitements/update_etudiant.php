<?php
// Démarrer la session
session_start();
// Inclure le fichier de connexion à la base de données
include_once('bd.php');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si le matricule de l'étudiant est présent dans les données postées
    if (isset($_POST['matricule'])) {
        // Récupération des données postées
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $lieuNaissance = $_POST['LieuNaisse'];
        $filiere = $_POST['filiere'];
        $genre = $_POST['genre'];
        $classe = $_POST['classe'];
        $dateNaissance = $_POST['dateNaisse'];

        // Requête de mise à jour de l'étudiant dans la base de données
        $query = $bdd->prepare("UPDATE etudiant SET nom=?, prenom=?, lieuNaissance=?, filiere=?, genre=?, classe=?, dateNaissance=? WHERE matricule=?");
        $result = $query->execute([$nom, $prenom, $lieuNaissance, $filiere, $genre, $classe, $dateNaissance, $matricule]);

        if ($result) {
            // Redirection vers la page de détails de l'étudiant
            header("Location: /projet_web/pages/etudiants/listes-etudiants.php?success=Etudiant mis à jour avec succès.");
            exit;
        } else {
            echo "Erreur lors de la mise à jour de l'étudiant.";
        }
    } else {
        echo "Matricule de l'étudiant non fourni.";
    }
} else {
    echo "Accès non autorisé.";
}
?>