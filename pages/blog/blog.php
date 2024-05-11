<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de l'Université Aube Nouvelle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #00274c;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: white;
    }

    .blog-post {
        margin-bottom: 40px;
    }

    .blog-post img {
        max-width: 100%;
    }

    .blog-post h2 {
        color: #00274c;
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Université Aube Nouvelle</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../propos/propos.php">À propos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../blog/blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-post">
                    <h2>Les nouvelles inscriptions sont ouvertes pour l'année universitaire 2024-2025</h2>
                    <p class="text-muted">Publié le 10 mai 2024 par Admin</p>
                    <img src="https://via.placeholder.com/750x300" alt="Inscriptions ouvertes">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae nisl nec nunc malesuada
                        consequat eget ut turpis. Nulla facilisi. Proin accumsan blandit augue a condimentum. Nullam
                        elementum, arcu id finibus venenatis, ipsum justo tincidunt erat, et consequat nisi magna vel
                        nulla. Proin lacinia, lectus vel cursus dapibus, lectus libero euismod risus, vel eleifend
                        velit arcu ac eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia curae; Donec nec lectus vel libero malesuada tincidunt. Pellentesque quis commodo
                        metus, nec venenatis turpis. Nam et laoreet odio.</p>
                    <a href="#" class="btn btn-primary">Lire la suite &rarr;</a>
                </div>
                <hr>
                <div class="blog-post">
                    <h2>Conférence sur l'intelligence artificielle</h2>
                    <p class="text-muted">Publié le 5 mai 2024 par Professeur X</p>
                    <img src="https://via.placeholder.com/750x300" alt="Conférence IA">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae nisl nec nunc malesuada
                        consequat eget ut turpis. Nulla facilisi. Proin accumsan blandit augue a condimentum. Nullam
                        elementum, arcu id finibus venenatis, ipsum justo tincidunt erat, et consequat nisi magna vel
                        nulla. Proin lacinia, lectus vel cursus dapibus, lectus libero euismod risus, vel eleifend
                        velit arcu ac eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia curae; Donec nec lectus vel libero malesuada tincidunt. Pellentesque quis commodo
                        metus, nec venenatis turpis. Nam et laoreet odio.</p>
                    <a href="#" class="btn btn-primary">Lire la suite &rarr;</a>
                </div>
                <hr>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Recherche</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Catégories</h5>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Evénements</a>
                            </li>
                            <li>
                                <a href="#">Cours</a>
                            </li>
                            <li>
                                <a href="#">Recherche</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Widget</h5>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">© 2024 Université Aube Nouvelle</p>
        </div>
        <!-- /.container -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>