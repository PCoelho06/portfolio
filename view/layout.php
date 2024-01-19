<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b3e17d2f75.js" crossorigin="anonymous"></script>
    <title><?= $page ?> - Lapinou.tech</title>
    <script src="assets/js/navbar.js" defer></script>
    <script src="assets/js/projects.js" defer></script>
    <script src="assets/js/homepage.js" defer></script>
</head>

<body class="d-flex flex-column">
    <header>
        <nav class="navbar">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.svg" alt="Logo" class="d-inline-block align-text-top logo">
            </a>
            <div class="menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=projets">projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=a-propos">à propos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="mx-auto">
        <?= $content ?>
    </main>

    <footer>
        <ul>
            <li class="nav-item">
                <a class="footer-link" href="index.php?page=mentions-legales">Mentions légales</a>
            </li>
            <li class="nav-item">
                <a class="footer-link" href="index.php?page=politique-confidentialite">Politique de confidentialité</a>
            </li>
            <li class="nav-item">
                <a class="footer-link" href="index.php?page=accessibilite">Accessibilité</a>
            </li>
        </ul>
    </footer>
</body>

</html>