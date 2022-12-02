<?php
class TodoItem 
{
    // Properties
    private $id;
    private $name;
    private $description;
    private $status;
    private $created_at;
    private $updated_at;

    // Constructor
    function __construct($id, $name, $description, $status, $created_at, $updated_at) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    // Getters
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getStatus() {
        return $this->status;
    }

    function getCreatedAt() {
        return $this->created_at;
    }

    function getUpdatedAt() {
        return $this->updated_at;
    }

    // Setters
    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setStatus($status) {
        $this->status = $status;
    }
}

?>