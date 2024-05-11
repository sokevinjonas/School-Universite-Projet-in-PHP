<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Université Aube Nouvelle</title>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/formulaire.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    .container {
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h1 {
        text-align: center;
        color: #00274c;
    }

    p {
        margin-bottom: 20px;
    }

    .team-members {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        gap: 10px;
        margin-top: 10px;
    }

    .member {
        margin-bottom: 10px;
    }

    .member h4 {
        color: #00274c;
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
                <div class="container">
                    <h1>À propos de notre projet</h1>
                    <p>Notre projet consiste à créer une application web de gestion universitaire, offrant un système
                        pour
                        les étudiants, le corps professoral.</p>
                    <p>Sur ce site, vous pourrez :</p>
                    <ul>
                        <li>Effectuer des inscriptions en ligne</li>
                        <li>Gestion des etudiants</li>
                        <li>Gestion des personnnels</li>
                        <li>Et d'autres fonctionnalitées futures...</li>
                    </ul>
                    <p>Ce site vise à simplifier la gestion académique et à améliorer l'expérience du personnnel.</p>

                    <h2>Les membres du Groupe 4:</h2>
                    <div class="team-members">
                        <div class="member">
                            <h4>Ouedraogo Abdoul Aziz</h4>
                        </div>
                        <div class="member">
                            <h4>WOUROHIRE Samuel</h4>
                        </div>
                        <div class="member">
                            <h4>SANFO Mahamadi</h4>
                        </div>
                        <div class="member">
                            <h4>Ouedraogo Ismael</h4>
                        </div>
                        <div class="member">
                            <h4>ILBOUDO Songr La Panga Christian</h4>
                        </div>
                        <div class="member">
                            <h4>NANA Aristide</h4>
                        </div>
                        <div class="member">
                            <h4>BAGUIAN Abdoul fataaf</h4>
                        </div>
                        <div class="member">
                            <h4>KANAZOE Latifatou</h4>
                        </div>
                        <div class="member">
                            <h4>CDIALLO Issiaka</h4>
                        </div>
                        <div class="member">
                            <h4>BONKOUGOU Justin</h4>
                        </div>
                        <div class="member">
                            <h4>SO Kevin Jonas</h4>
                        </div>
                    </div>
                </div>


        </main>
        <!-- MAIN -->
    </section>

    <?php include '../../includes/footer.php'; ?>