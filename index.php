<?php
require("controller/frontend.php");

try {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'mentions-legales') {
            showLegalMentions();
        } elseif ($_GET['page'] == 'accessibilite') {
            showAccessibility();
        } else {
            throw new Exception("Aucune page ne correspond à cet URL", 1);
        }
    } else {
        showHome();
    }
} catch (Exception $e) {
    die($e->getMessage());
}
