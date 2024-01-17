<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<h1 class="home-name">Pierre Coelho</h1>
<div class="socials">
    <a class="social-item-link" href="">
        <div class="social-item"><i class="fa-brands fa-x-twitter"></i></div>
    </a>
    <a class="social-item-link" href="">
        <div class="social-item"><i class="fa-brands fa-instagram"></i></div>
    </a>
    <a class="social-item-link" href="">
        <div class="social-item"><i class="fa-brands fa-github"></i></div>
    </a>
    <a class="social-item-link" href="">
        <div class="social-item"><i class="fa-brands fa-linkedin"></i></div>
    </a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./view/layout.php'); ?>