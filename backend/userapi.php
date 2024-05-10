<?php
//userapi.php

// Set headers for allowing CORS and specifying JSON content type
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json'); 

include 'connection.php';

//register
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

  //login WORKS
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'login_user') {
    // Retrieve payload data
    $data = json_decode(file_get_contents("php://input"), true);
  
    // Extract email and password from payload
    $email = $data['email'];
    $password = $data['password'];

    // Perform validation and authentication here

    // Example: Check if email and password match a user record in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        // Authentication successful, send success response
        echo json_encode(array('message' => 'Login successful', 'user' => $user));
    } else {
        // Authentication failed, send error response
        echo json_encode(array('error' => 'Invalid email or password'));
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
    // Retrieve all not deleted records
    if ($_GET['action'] === 'get_all_notdeleted') {
        $stmt = $conn->prepare("SELECT * FROM users WHERE is_deleted = 0");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }

    // Retrieve all deleted records
    if ($_GET['action'] === 'get_all_deleted') {
        $stmt = $conn->prepare("SELECT * FROM users WHERE is_deleted = 1");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Archive
    if ($data['action'] === 'soft_archive') {
        $user_id = $data['user_id'];

        try {
            $stmt = $conn->prepare("UPDATE users SET is_deleted = 1 WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            echo json_encode(array("message" => "User archived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }

    // Unarchive
    if ($data['action'] === 'soft_unarchive') {
        $user_id = $data['user_id'];

        try {
            $stmt = $conn->prepare("UPDATE users SET is_deleted = 0 WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            echo json_encode(array("message" => "User unarchived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }
}


?>


