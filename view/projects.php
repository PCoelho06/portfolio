<?php ob_start(); ?>

<div class="breadcrumbs">
    <span class="breadcrumb"><a href="index.php">Accueil</a></span>
    <span class="separator">></span>
    <span class="breadcrumb active"><a href="index.php?page=<?= $_GET['page'] ?>"><?= $page ?></a></span>
</div>

<h1 class="page-title" data-title="<?= $page ?>">
    <?= $page ?>
</h1>

<!-- Projets -->

<section class="projects">
    <div class="card">
        <div class="front-card">
            <img src="assets/img/potigato.jpg" class="card-img" alt="Image de la page d'accueil du site web Potigato.fr">
        </div>
        <div class="back-card invisible">
            <div class="project-infos">
                <h2 class="card-title"><a href="https://potigato.fr" target="_blank">Potigato.fr</a></h2>
                <p class="description">E-commerce</p>
            </div>
            <div class="techs">
                <span class="tech">Wordpress</span>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="front-card">
            <img src="assets/img/rotary.png" class="card-img" alt="Image de la page d'accueil du site web rotary-portovecchio.fr">
        </div>
        <div class="back-card invisible">
            <div class="project-infos">
                <h2 class="card-title"><a href="https://rotary-portovecchio.org" target="_blank">Rotary - Portovecchio</a></h2>
                <p class="description">Site association caritative</p>
            </div>
            <div class="techs">
                <span class="tech">HTML5</span>
                <span class="tech">CSS3</span>
                <span class="tech">Twig</span>
                <span class="tech">Symfony (PHP)</span>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('./view/layout.php'); ?>