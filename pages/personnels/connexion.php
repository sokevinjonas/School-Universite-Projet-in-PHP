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
                    <h1>S'authentifier ..</h1>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Me connecter</h3>
                    </div>
                    <form action="/projet_web/auth/connexion.php" method="POST">
                        <div class="form">
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
                                    <input type="submit" name="enregistrer" class="button" value="Se connecter">
                                </div>
                            </div>
                            <span>Je n'ai pas de compte </span><a href="inscrire-personnels.php">Créer</a>
                        </div>
                    </form>
                </div>
            </div>


        </main>
        <!-- MAIN -->
    </section>
    <?php include '../../includes/footer.php'; ?>