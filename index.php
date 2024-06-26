<?php 
session_start();
include_once('traitements/bd.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Gestion universite</title>
</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
	include 'includes/menu.php';
	?>

    <section id="content">
        <?php include 'includes/header.php'; ?>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Bievenue</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Accuel</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Tableau de Bord</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3><?php echo $totalEtudiants; ?></h3>
                        <p>Total Etudiant</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-user'></i>
                    <span class="text">
                        <h3><?php echo $totalPersonnels; ?></h3>
                        <p>Total Professeur</p>
                    </span>
                </li>
            </ul>
        </main>
        <!-- MAIN -->
    </section>
    <?php include 'includes/footer.php'; ?>