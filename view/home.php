<?php ob_start(); ?>

<div class="presentation">
    <div class="presentation-left">
        <section class="greetings">
            <p class="text-center display-3">Hey <span class="hand-icon">👋🏼</span>,</p>
            <p class="text-center display-3">moi c'est</p>
        </section>
        <section class="name">
            <h1 class="name-display">Pierre Coelho</h1>
        </section>
        <section class="function">
            <h2 class="function-display">Developpeur web full-stack</h2>
        </section>
        <section class="socials">
            <a class="social-link" href="https://github.com/PCoelho06">
                <div class="social-item"><i class="fa-brands fa-github"></i></div>
            </a>
            <a class="social-link" href="">
                <div class="social-item"><i class="fa-brands fa-x-twitter"></i></div>
            </a>
            <a class="social-link" href="">
                <div class="social-item"><i class="fa-brands fa-instagram"></i></div>
            </a>
            <a class="social-link" href="">
                <div class="social-item"><i class="fa-brands fa-linkedin"></i></div>
            </a>
        </section>
    </div>
    <div class="presentation-right">
        <img src="assets/img/homepage-illustration.png" alt="Illustration de la page d'accueil" id="homepage-illustration">
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./view/layout.php'); ?>