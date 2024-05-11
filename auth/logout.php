<?php
// Démarre la session
session_start();

// Détruit toutes les variables de session
$_SESSION = array();

// Si la session existe, la détruit
if (isset($_SESSION)) {
    session_destroy();
}

// Redirige vers la page de connexion ou d'accueil
header("Location: ../pages/personnels/connexion.php");
exit;
?>