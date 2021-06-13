<?php
    require 'config.php';
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $username = $_SESSION['varname'];

    $sql = "SELECT * FROM member WHERE name LIKE '%".$username."%' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
?>