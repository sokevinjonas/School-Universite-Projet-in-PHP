<?php
// Inclure le fichier de connexion à la base de données
include_once('bd.php');

// Vérifier si le paramètre 'delete' est présent dans l'URL
if(isset($_GET['delete'])) {
    $matricule = $_GET['delete'];

    // Requête pour supprimer l'étudiant
    $stmt = $bdd->prepare("DELETE FROM etudiant WHERE matricule = ?");
    $stmt->execute([$matricule]);

    // Redirection vers la liste des étudiants après la suppression
    header("Location: /projet_web/pages/etudiants/listes-etudiants.php?message=Etudiant supprimé avec succès.");
    exit;
} else {
    // Redirection vers la liste des étudiants si aucun paramètre 'delete' n'est présent
    echo "Erreur";
    // header("Location: listes-etudiants.php");
    exit;
}
?>