<?php
session_start();
if (isset($_SESSION['eID'])) {
    unset($_SESSION['eID']);
}

header("location: ../HTML SCRIPTS/User_panel/index.php");
die;