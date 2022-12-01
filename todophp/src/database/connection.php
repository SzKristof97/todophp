<?php
    // Prepare the connection string
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "todophp";

    // Connect to the database
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
?>