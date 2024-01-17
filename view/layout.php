<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b3e17d2f75.js" crossorigin="anonymous"></script>
    <title><?= $title ?> - Lapinou.tech</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <script src="assets/js/navbar.js" defer></script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo.svg" alt="Logo" class="d-inline-block align-text-top logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-toggler-up"></div>
                    <div class="navbar-toggler-middle"></div>
                    <div class="navbar-toggler-down"></div>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">à propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="mx-auto">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    <footer class="footer mt-auto w-100">
        <ul class="d-flex justify-content-around align-items-center mx-auto">
            <li class="nav-item">
                <a class="footer-link" href="index.php?page=mentions-legales">Mentions légales</a>
            </li>
            <li class="nav-item">
                <a class="footer-link" href="index.php?page=accessibilite">Accessibilité</a>
            </li>
        </ul>
    </footer>
</body>

</html>