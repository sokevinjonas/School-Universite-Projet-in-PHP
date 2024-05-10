<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <title>Liste Personnels</title>
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
                        <h3>Liste des Personnels</h3>
                        <a href="">Ajouter un nouveau ersonnel</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Nom & Prenom (s)</th>
                                <th>Filiere</th>
                                <th>Classe</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10063922</td>
                                <td>So Kevin Jonas</td>
                                <td>IT</td>
                                <td>L2</td>
                                <td>
                                    <button>Voir</button>
                                    <button>Modifier</button>
                                    <button>Supprimer</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <?php include '../..//includes/footer.php'; ?>