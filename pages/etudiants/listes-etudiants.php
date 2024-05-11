<?php
include_once('../../traitements/bd.php');

// Requête pour récupérer les étudiants
$query = $bdd->query("SELECT * FROM etudiant");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <title>Liste etudiants</title>
    <style>
    .button {
        margin-right: 5px;
        padding: 2px 4px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .button:active {
        background-color: #003d80;
    }

    .alert {
        display: none;
        background-color: #f44336;
        color: white;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include '../../includes/menu.php'; 
    ?>
    <section id="content">
        <?php include '../../includes/header.php'; ?>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Bievenue</h1>
                    <?php
                    // Vérifier si un message est présent dans l'URL
                    if(isset($_GET['message'])) {
                        $message = $_GET['message'];
                    }
                    ?>
                    <div id="alert" class="alert" <?php if(isset($message)) echo "style='display: block;'"; ?>>
                        <?php if(isset($message)) echo $message; ?>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Gestion Etudiant</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Liste des Etudiants</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Liste des etudiants</h3>
                        <a href="/projet_web/pages/etudiants/ajouter-etudiants.php">Ajouter un nouvel etudiant</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom & Prénom(s)</th>
                                <th>Filière</th>
                                <th>Classe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Boucle à travers les résultats de la requête
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['nom'] . " " . $row['prenom'] . "</td>";
                                echo "<td>" . $row['filiere'] . "</td>";
                                echo "<td>" . $row['classe'] . "</td>";
                                echo "<td>";
                                echo "<a href='../../traitements/show-etudiant.php?detail=" . $row['matricule'] . "' class='button'>Voir</a>";
                                echo "<a class='button'>Modifier</a>";
                                // Lien de suppression
                                echo "<a href='../../traitements/delete-etudiant.php?delete=" . $row['matricule'] . "' class='button' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet étudiant?\")'>Supprimer</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <?php include '../..//includes/footer.php'; ?>