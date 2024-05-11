<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=g_universite', 'root', '');
} catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
?>