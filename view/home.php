<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>

<section class="greetings">
    <p class="text-center display-3">Hey <span class="hand-icon">👋🏼</span>,</p>
    <p class="text-center display-3">moi c'est</p>
</section>
<section class="name">
    <h1 class="name-display">Pierre Coelho</h1>
</section>
<section class="socials">
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
</section>

<?php $content = ob_get_clean(); ?>
<?php require('./view/layout.php'); ?>