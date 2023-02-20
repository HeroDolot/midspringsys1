<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "midspringsys1_db";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connection Failed:" .$conn->connect_error);
    }
    
    // echo "connected!";
?>
