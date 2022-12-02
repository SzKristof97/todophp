<?php

function connect(){
    $conn = require 'src/database/connection.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getTodoItems($conn){
    $sql = "SELECT * FROM todolist";
    $result = $conn->query($sql);

    require 'src/database/models/todoitem.php';
    $todoitems = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $todoitems[] = new TodoItem($row["id"], $row["name"], $row["description"], $row["status"], $row["created_time"], $row["updated_time"]);
        }
    }

    $conn->close();

    return $todoitems;
}

?> 