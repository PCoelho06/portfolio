<?php
require("controller/frontend.php");

try {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'projets') {
            showProjects("Projets");
        } elseif ($_GET['page'] == 'a-propos') {
            showAbout("À propos");
        } elseif ($_GET['page'] == 'mentions-legales') {
            showLegalMentions("Mentions légales");
        } elseif ($_GET['page'] == 'accessibilite') {
            showAccessibility("Accessibilité");
        } else {
            throw new Exception("Aucune page ne correspond à cet URL", 1);
        }
    } else {
        showHome("Accueil");
    }
} catch (Exception $e) {
    die($e->getMessage());
}
