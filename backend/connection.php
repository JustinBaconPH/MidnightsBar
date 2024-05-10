<?php
$servername = "sql107.infinityfree.com";
$username = "if0_36523965";
$password = "7G3SJKjJn6Lns";
$database = "if0_36523965_midnights";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}