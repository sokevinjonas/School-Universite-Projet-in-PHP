<?php
// Inclure le fichier de connexion à la base de données
include_once('../../traitements/bd.php');

// Vérification de la présence du matricule de l'étudiant dans l'URL
if(isset($_GET['modifier'])) {
    // Récupération du matricule de l'étudiant
    $matricule_etudiant = $_GET['modifier'];

    // Requête pour récupérer les détails de l'étudiant en fonction de son matricule
    $query = $bdd->prepare("SELECT * FROM etudiant WHERE matricule = ?");
    $query->execute([$matricule_etudiant]);

    // Vérification si l'étudiant a été trouvé
    if ($query->rowCount() > 0) {
        // Récupération des données de l'étudiant
        $etudiant = $query->fetch(PDO::FETCH_ASSOC);
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
                    <h1>Mettre à jour un étudiant</h1>
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
                        <h3>Mettre à jour un étudiant</h3>
                    </div>
                    <?php
                    // Vérification si les détails de l'étudiant ont été récupérés avec succès
                    if(isset($etudiant) && !empty($etudiant)) {
                    ?>
                    <form action="/projet_web/traitements/update_etudiant.php" method="POST">
                        <div class="form">
                            <input type="hidden" name="matricule" value="<?php echo $etudiant['matricule']; ?>">
                            <div class="row">
                                <div class="col">
                                    <label for="nom">Nom:</label>
                                    <input type="text" id="nom" name="nom" value="<?php echo $etudiant['nom']; ?>">
                                </div>
                                <div class="col">
                                    <label for="prenom">Prénom(s):</label>
                                    <input type="text" id="prenom" name="prenom"
                                        value="<?php echo $etudiant['prenom']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="LieuNaisse">Lieu de Naissance:</label>
                                    <input type="text" id="LieuNaisse" name="LieuNaisse"
                                        value="<?php echo $etudiant['lieuNaissance']; ?>">
                                </div>
                                <div class="col">
                                    <label for="filiere">Filière:</label>
                                    <input type="text" id="filiere" name="filiere"
                                        value="<?php echo $etudiant['filiere']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="genre">Genre:</label>
                                    <select id="genre" name="genre">
                                        <option value="homme"
                                            <?php if($etudiant['genre'] == 'homme') echo 'selected'; ?>>Homme</option>
                                        <option value="femme"
                                            <?php if($etudiant['genre'] == 'femme') echo 'selected'; ?>>Femme</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="classe">Classe:</label>
                                    <input type="text" id="classe" name="classe"
                                        value="<?php echo $etudiant['classe']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="dateNaisse">Date de Naissance:</label>
                                    <input type="date" id="dateNaisse" name="dateNaisse"
                                        value="<?php echo $etudiant['dateNaissance']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" name="enregistrer" class="button" value="Modifier">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    } else {
                        echo "<p>Aucun étudiant trouvé.</p>";
                    }
                    ?>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <?php include '../../includes/footer.php'; ?>
</body>

</html>