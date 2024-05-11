<?php
session_start();
include_once('../../traitements/bd.php');

// Requête pour récupérer les étudiants
$query = $bdd->query("SELECT * FROM personnel");
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

    <title>Liste personnel</title>
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

    .success {
        display: none;
        color: #ffffff;
        background-color: #83e44f;
        border-color: #c3e6cb;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid transparent;
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
                    <h1>Liste des personnels</h1>
                    <?php
                    // Vérifier si un message est présent dans l'URL
                    if(isset($_GET['message'])) {
                        $message = $_GET['message'];
                    }
                    if(isset($_GET['success'])) {
                        $success = $_GET['success'];
                    }
                    ?>
                    <div id="alert" class="alert" <?php if(isset($message)) echo "style='display: block;'" ; ?>>
                        <?php if(isset($message)) echo $message; ?>
                    </div>
                    <div id="alert" class="success" <?php if(isset($success)) echo "style='display: block;'" ; ?>>
                        <?php if(isset($success)) echo $success; ?>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Gestion Personnel</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Liste des Personnels</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Liste des personnels</h3>
                        <a href="/projet_web/pages/personnels/ajouter-personnels.php">Enregistré un nouveu personnel</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom & Prénom(s)</th>
                                <th>Email</th>
                                <th>Pays</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Boucle à travers les résultats de la requête
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['nom'] . " " . $row['prenom'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['pays'] . "</td>";
                                echo "<td>";
                                echo "<a href='../../traitements/show_personnel.php?detail=" . $row['id'] . "' class='button'>Voir</a>";
                                echo "<a href='modifier-personnels.php?modifier=" . $row['id'] . "' class='button'>Modifier</a>";
                                // Lien de suppression
                                echo "<a href='../../traitements/delete_personnel.php?delete=" . $row['id'] . "' class='button' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet personnel?\")'>Supprimer</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            // Si aucun étudiant n'est enregistré
                            if ($query->rowCount() == 0) {
                                echo "<tr><td colspan='4'>Aucun personnel enregistré.</td></tr>";
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