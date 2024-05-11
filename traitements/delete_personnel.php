<?php
// Inclure le fichier de connexion à la base de données
include_once('bd.php');

// Vérifier si le paramètre 'delete' est présent dans l'URL
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Requête pour supprimer l'étudiant
    $stmt = $bdd->prepare("DELETE FROM personnel WHERE id = ?");
    $stmt->execute([$id]);

    // Redirection vers la liste des étudiants après la suppression
    header("Location: /projet_web/pages/personnels/listes-personnels.php?message=Personnel supprimé avec succès.");
    exit;
} else {
    // Redirection vers la liste des étudiants si aucun paramètre 'delete' n'est présent
    echo "Erreur";
    // header("Location: listes-etudiants.php");
    exit;
}
?>