<?php
// Démarrer la session
session_start();
// Inclure le fichier de connexion à la base de données
include_once('bd.php');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification si le matricule de l'étudiant est présent dans les données postées
    if (isset($_POST['id'])) {
        // Récupération des données postées
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_de_naissance = $_POST['date_de_naissance'];
        $pays = $_POST['pays'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Requête de mise à jour de l'étudiant dans la base de données
        $query = $bdd->prepare("UPDATE personnel SET nom=?, prenom=?, date_de_naissance=?, pays=?, email=?, mot_de_passe=? WHERE id=?");
        $result = $query->execute([$nom, $prenom, $date_de_naissance, $pays, $email, $mot_de_passe, $id]);

        if ($result) {
            // Redirection vers la page de détails de l'étudiant
            header("Location: /projet_web/pages/personnels/listes-personnels.php?success=Personnel mis à jour avec succès.");
            exit;
        } else {
            echo "Erreur lors de la mise à jour de Personnel.";
        }
    } else {
        echo "Id du Personnel non fourni.";
    }
} else {
    echo "Accès non autorisé.";
}
?>