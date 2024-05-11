<?php
// Inclure le fichier de connexion à la base de données
include_once('bd.php');

// Vérification de la présence du matricule de l'étudiant dans l'URL
if(isset($_GET['detail'])) {
    // Récupération du matricule de l'étudiant
    $id_personnel = $_GET['detail'];

    // Requête pour récupérer les détails de l'étudiant en fonction de son matricule
    $query = $bdd->prepare("SELECT * FROM personnel WHERE id = ?");
    $query->execute([$id_personnel]);

    // Vérification si l'étudiant a été trouvé
    if ($query->rowCount() > 0) {
        // Récupération des données de l'étudiant
        $personnel = $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/formulaire.css">

    <title>Liste personnels</title>
</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include '../includes/menu.php'; 
    ?>
    <section id="content">
        <?php include '../includes/header.php'; ?>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Détails de personnel</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Gestion Personnel</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/projet_web/pages/personnels/listes-personnels.php">Liste des
                                Personnels</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Détails de personnel</h3>
                    </div>
                    <?php
                    // Vérification si les détails de l'étudiant ont été récupérés avec succès
                    if(isset($personnel) && !empty($personnel)) {
                    ?>
                    <form action="/projet_web/traitements/update_personnel.php" method="POST">
                        <div class="form">
                            <input type="hidden" name="id" value="<?php echo $personnel['id']; ?>">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Nom:</label>
                                    <input disabled type="text" id="nom" name="nom"
                                        value="<?php echo $personnel['nom']; ?>">
                                </div>
                                <div class="col">
                                    <label for="prenom">Prénom(s):</label>
                                    <input disabled type="text" id="prenom" name="prenom"
                                        value="<?php echo $personnel['prenom']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="LieuNaisse">Date de Naissance:</label>
                                    <input disabled type="text" id="date_de_naissance" name="date_de_naissance"
                                        value="<?php echo $personnel['date_de_naissance']; ?>">
                                </div>
                                <div class="col">
                                    <label for="filiere">Pays:</label>
                                    <input disabled type="text" id="pays" name="pays"
                                        value="<?php echo $personnel['pays']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="dateNaisse">Email:</label>
                                    <input disabled type="email" id="email" name="email"
                                        value="<?php echo $personnel['email']; ?>">
                                </div>
                                <div class="col">
                                    <label for="dateNaisse">Mot de passe:</label>
                                    <input disabled type="text" id="mot_de_passe" name="mot_de_passe"
                                        value="<?php echo $personnel['mot_de_passe']; ?>">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    } else {
                        echo "<p>Aucun personnel trouvé.</p>";
                    }
                    ?>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <?php include '../includes/footer.php'; ?>
</body>

</html>