<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - Université Aube Nouvelle</title>
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
        flex-direction: row;
        margin-top: 10px;
    }

    .member {
        margin-bottom: 20px;
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
                    <p>Notre projet consiste à créer un site web de gestion pour notre université, offrant un système
                        complet
                        pour
                        les étudiants, le corps professoral et l'administration.</p>
                    <p>Sur ce site, vous pourrez :</p>
                    <ul>
                        <li>Consulter les programmes académiques offerts</li>
                        <li>Accéder aux informations sur les cours et les horaires</li>
                        <li>Effectuer des inscriptions en ligne</li>
                        <li>Accéder à des ressources pédagogiques et documents de cours</li>
                        <li>Consulter les événements et activités universitaires</li>
                        <li>Contacter les départements et le personnel administratif</li>
                        <li>Et bien plus encore...</li>
                    </ul>
                    <p>Ce site vise à simplifier la gestion académique et à améliorer l'expérience des étudiants, du
                        corps
                        enseignant et du personnel administratif.</p>

                    <h2>Le groupe 4</h2>
                    <div class="team-members">
                        <div class="member">
                            <h4>John Doe</h4>
                        </div>
                        <div class="member">
                            <h4>Jane Smith</h4>
                        </div>
                        <div class="member">
                            <h4>Michael Johnson</h4>
                        </div>
                        <div class="member">
                            <h4>Emily Brown</h4>
                        </div>
                        <div class="member">
                            <h4>David Williams</h4>
                        </div>
                        <div class="member">
                            <h4>Sarah Miller</h4>
                        </div>
                        <div class="member">
                            <h4>Robert Wilson</h4>
                        </div>
                        <div class="member">
                            <h4>Emma Davis</h4>
                        </div>
                        <div class="member">
                            <h4>Christopher Taylor</h4>
                        </div>
                        <div class="member">
                            <h4>Laura Martinez</h4>
                        </div>
                    </div>
                </div>


        </main>
        <!-- MAIN -->
    </section>

    <?php include '../../includes/footer.php'; ?>