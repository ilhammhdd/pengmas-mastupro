<?php
    session_start();

    $_SESSION['account_verified'] = false;

    header("location: admin_home.php");
?>