<?php
//userapi.php

// Set headers for allowing CORS and specifying JSON content type
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json'); 

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create_user') {
    // Retrieve payload data
    $data = json_decode(file_get_contents("php://input"), true);
  
    // Extract data from payload
    $email = $data['email'];
    $username = $data['username'];
    $contact_number = $data['contact_number'];
    $password = $data['password'];

  
    // Insert data into user table
    $stmt = $conn->prepare("INSERT INTO users (email, username, contact_number, password, is_deleted) VALUES (?, ?, ?, ?, 0)");
    $stmt->execute([$email, $username, $contact_number, $password]);
    

  
    // Send success response
    echo json_encode(array('message' => 'Account created successfully'));
  }
?>



