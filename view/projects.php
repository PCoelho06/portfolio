<?php ob_start(); ?>

<div class="breadcrumbs">
    <span class="breadcrumb"><a href="index.php">Accueil</a></span>
    <span class="separator">></span>
    <span class="breadcrumb active"><a href="index.php?page=<?= $_GET['page'] ?>"><?= $page ?></a></span>
</div>

<h1 class="page-title" data-title="Projets">
    Projets
</h1>

<!-- Projets -->

<section class="projects">
    <div class="card">
        <div class="front-card">
            <img src="assets/img/potigato.jpg" class="card-img" alt="Image de la page d'accueil du site web Potigato.fr">
        </div>
        <div class="back-card invisible">
            <div class="project-infos">
                <h2 class="card-title">Potigato.fr</h2>
                <p class="description">E-commerce</p>
            </div>
            <div class="techs">
                <span class="tech">Wordpress</span>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('./view/layout.php'); ?>