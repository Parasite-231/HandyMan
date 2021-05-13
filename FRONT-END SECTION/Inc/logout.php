<?php
session_start();
if (isset($_SESSION['ID'])) {
    unset($_SESSION['ID']);
}

header("location: ../HTML SCRIPTS/index.php");
die;