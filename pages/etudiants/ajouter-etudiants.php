<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/formulaire.css">

    <title>Liste etudiants</title>
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
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Gestion Etudiant</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/projet_web/pages/etudiants/listes-etudiants.php">Liste des
                                Etudiants</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Liste des étudiants</h3>
                        <a href="">Ajouter un nouvel étudiant</a>
                    </div>
                    <form action="/projet_web/traitements/store_etudiant.php" method="POST">
                        <div class="form">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Nom:</label>
                                    <input type="text" id="nom" name="nom">
                                </div>
                                <div class="col">
                                    <label for="prenom">Prénom(s):</label>
                                    <input type="text" id="prenom" name="prenom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="LieuNaisse">Lieu de Naissance:</label>
                                    <input type="text" id="LieuNaisse" name="LieuNaisse">
                                </div>
                                <div class="col">
                                    <label for="filiere">Filière:</label>
                                    <input type="text" id="filiere" name="filiere">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="genre">Genre:</label>
                                    <select id="genre" name="genre">
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="classe">Classe:</label>
                                    <input type="text" id="classe" name="classe">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="dateNaisse">Date de Naissance:</label>
                                    <input type="date" id="dateNaisse" name="dateNaisse">
                                </div>
                                <!-- <div class="col">
                                    <label for="date_inscription">Date d'inscription:</label>
                                    <input type="date" id="date_inscription" name="date_inscription">
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="enregistrer" class="button" value="enregistrer">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </main>
        <!-- MAIN -->
    </section>
    <?php include '../..//includes/footer.php'; ?>