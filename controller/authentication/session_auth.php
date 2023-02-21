<?php
    session_start();

    if(!isset($_SESSION['midAdmin']) || $_SESSION['midAdmin'] != 'abc123') {
        header('location:../../');
        exit();
    }
?>
