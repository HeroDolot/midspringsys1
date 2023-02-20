<?php
    session_start();
    if (!isset($_SESSION['midspringadmin']) || $_SESSION['midspringadmin'] != 'abc123') {
        header('location: ../../index.php');
        exit();
    }
?>
