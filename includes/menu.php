<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Gestion Université</span>
    </a>
    <ul class="side-menu top">
        <?php if(isset($_SESSION['personnel_id'])) { ?>
        <!-- Menu pour les utilisateurs connectés -->
        <li <?php if ($currentPage == "index.php") echo "class='active'"; ?>>
            <a href="/projet_web/index.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Accueil</span>
            </a>
        </li>
        <li
            <?php if ($currentPage == "listes-etudiants.php" || $currentPage == "ajouter-etudiants.php" || $currentPage == "modifier-etudiants.php") echo "class='active'"; ?>>
            <a href="/projet_web/pages/etudiants/listes-etudiants.php">
                <i class='bx bx-user'></i>
                <span class="text">Gestion Etudiant</span>
            </a>
        </li>
        <li
            <?php if ($currentPage == "listes-personnels.php" || $currentPage == "ajouter-personnels.php" || $currentPage == "modifier-personnels.php") echo "class='active'"; ?>>
            <a href="/projet_web/pages/personnels/listes-personnels.php">
                <i class='bx bx-user'></i>
                <span class="text">Gestion Personnel</span>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="/projet_web/pages/blog/blog.php">
                <i class='bx bx-book'></i>
                <span class="text">Blog</span>
            </a>
        </li>
        <li>
            <a href="/projet_web/pages/contact/contact.php">
                <i class='bx bx-phone'></i>
                <span class="text">Contact</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li <?php if ($currentPage == "propos.php" ) echo "class='active'"; ?>>
            <a href="/projet_web/pages/propos/propos.php">
                <i class='bx bxs-cog'></i>
                <span class="text">A Propos</span>
            </a>
        </li>

        <?php if(isset($_SESSION['personnel_id'])) { ?>
        <li>
            <a href="/projet_web/auth/logout.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Déconnexion</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!isset($_SESSION['personnel_id'])) { ?>
        <li <?php if ($currentPage == "inscrire-personnels.php" ) echo "class='active'"; ?>>
            <a href="/projet_web/pages/personnels/inscrire-personnels.php" class="logout">
                <i class='bx shopping-bag-alt'></i>
                <span class="text">S'inscire</span>
            </a>
        </li>
        <?php } ?>
    </ul>
</section>