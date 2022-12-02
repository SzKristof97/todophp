<?php
    // Prepare the connection string
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "todophp";

    // Connect to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    return $conn;
?>