<?php
//userapi.php

// Set headers for allowing CORS and specifying JSON content type
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json'); 

include 'connection.php';

// Admin login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'admin_login') {
    // Retrieve payload data
    $data = json_decode(file_get_contents("php://input"), true);
  
    // Extract email and password from payload
    $email = $data['email'];
    $password = $data['password'];

    // Perform validation and authentication here

    // Example: Check if email and password match an admin record in the database
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
    $stmt->execute([$email, $password]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($admin) {
        // Authentication successful, send success response
        echo json_encode(array('message' => 'Admin login successful', 'admin' => $admin));
    } else {
        // Authentication failed, send error response
        echo json_encode(array('error' => 'Invalid email or password'));
    }
}
?>