<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=g_universite', 'root', '');
    // Requête pour compter le nombre d'étudiants
    $query_1 = $bdd->query("SELECT COUNT(*) AS total FROM etudiant");
    $result_1 = $query_1->fetch(PDO::FETCH_ASSOC);
    $totalEtudiants = $result_1['total'];
    // Requête pour compter le nombre de personnels
    $query_2 = $bdd->query("SELECT COUNT(*) AS total FROM personnel");
    $result_2 = $query_2->fetch(PDO::FETCH_ASSOC);
    $totalPersonnels = $result_2['total'];
    
} catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
?>