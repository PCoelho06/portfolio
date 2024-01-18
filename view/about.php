<?php ob_start(); ?>

<div class="breadcrumbs">
    <span class="breadcrumb"><a href="index.php">Accueil</a></span>
    <span class="separator">></span>
    <span class="breadcrumb active"><a href="index.php?page=<?= $_GET['page'] ?>"><?= $page ?></a></span>
</div>

<h1 class="page-title" data-title="<?= $page ?>">
    <?= $page ?>
</h1>

<div class="about">
    <section class="about-infos"></section>
    <section class="photo">
        <img src="assets/img/moi.jpg" class="card-img" alt="Photographie de Pierre Coelho">
    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./view/layout.php'); ?>