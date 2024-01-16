<?php
require("controller/frontend.php");

try {
    showHome();
} catch (Exception $e) {
    die($e->getMessage());
}
