<?php 
session_start();
include "db_connection.php";

$bestelling_id = $_GET['id'];
        $sql= "DELETE FROM bestelling WHERE bestelling_id = $bestelling_id";
        $data = $conn->query($sql);
        header("Location: overzicht.php");
?>