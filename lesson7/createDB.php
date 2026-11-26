<?php

$host = "localhost";
$user = "root";
$pass = "";
try{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $sql = "Create database dddd";
    $conn->exec($sql);
    echo("Database Created");
} catch(Exeption $e) {
    echo "not connecetd";
}



?>