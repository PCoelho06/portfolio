<?php $title = 'Accessibilité'; ?>

<?php ob_start(); ?>

<h1>Pierre Coelho</h1>
<div class="socials">
    <div class="social-item"><i class="fa-brands fa-x-twitter"></i></div>
    <div class="social-item"><i class="fa-brands fa-instagram"></i></div>
    <div class="social-item"><i class="fa-brands fa-github"></i></div>
    <div class="social-item"><i class="fa-brands fa-linkedin"></i></div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./view/layout.php'); ?>