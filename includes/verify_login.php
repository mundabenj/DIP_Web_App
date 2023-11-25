<?php
    require_once "constants.php";
    if (!isset($_SESSION["consort"]) || !is_array($_SESSION["consort"])) {
        @header("Location: signin.php?not_set");
        exit();
    }
?>