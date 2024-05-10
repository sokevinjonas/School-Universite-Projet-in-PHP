<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=g_universite', 'root', '');
    echo "Successfully";
} catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
}
?>