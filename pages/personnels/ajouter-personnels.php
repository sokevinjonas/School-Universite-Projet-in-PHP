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

    <title>Liste Personnel</title>
    <style>
    .alert {
        display: none;
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    .error {
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
                    <h1>Ajouter un nouveau personnel</h1>
                    <?php
                    // Vérifier si un message est présent dans l'URL
                    if(isset($_GET['message'])) {
                        $message = $_GET['message'];
                    }
                    if(isset($_GET['error_message'])) {
                        $error_message = $_GET['error_message'];
                    }
                    ?>
                    <div id="alert" class="alert" <?php if(isset($message)) echo "style='display: block;'"; ?>>
                        <?php if(isset($message)) echo $message; ?>
                    </div>
                    <div id="alert" class="error" <?php if(isset($error_message)) echo "style='display: block;'"; ?>>
                        <?php if(isset($error_message)) echo $error_message; ?>
                    </div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Gestion Personnel</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/projet_web/pages/etudiants/listes-etudiants.php">Liste des
                                Personnels</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Liste des personnels</h3>
                        <a href="">Ajouter un nouveau personnel</a>
                    </div>
                    <form action="/projet_web/traitements/store_personnel.php" method="POST">
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
                                    <label for="LieuNaisse">Date de Naissance:</label>
                                    <input type="text" id="date_de_naissance" name="date_de_naissance">
                                </div>
                                <div class="col">
                                    <label for="filiere">Pays:</label>
                                    <input type="text" id="pays" name="pays">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="dateNaisse">Email:</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="col">
                                    <label for="date_inscription">Mot de passe:</label>
                                    <input type="password" id="mot_de_passe" name="mot_de_passe">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="enregistrer" class="button" value="Enregistré">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </main>
        <!-- MAIN -->
    </section>
    <?php include '../../includes/footer.php'; ?>