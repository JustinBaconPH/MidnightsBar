<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

include 'connection.php';

//GETS SPECIFIC USER ID (TO BE REPLACED WITH A FUNCTION THAT WILL GET ID OF LOGGED IN USER)
if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
    
    //WORKS gets the id from login
    if ($_GET['action'] === 'get_all') {
        $user_id = $_GET['user_id']; // Get the user_id from the request
    
        $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
        $stmt->execute([$user_id]);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }

  
     // Retrieve user_id based on username, email, and contact_number
     if ($_GET['action'] === 'get_user_id') {
        $username = $_GET['username'];
        $email = $_GET['email'];
        $contact_number = $_GET['contact_number'];
        
        $stmt = $conn->prepare("SELECT user_id FROM users WHERE username = :username AND email = :email AND contact_number = :contact_number LIMIT 1");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact_number', $contact_number);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            echo json_encode($row);
        } else {
            echo json_encode(['error' => 'User not found']);
        }
    }

    // Retrieve all not deleted records
    if ($_GET['action'] === 'get_all_notdeleted') {
        $stmt = $conn->prepare("SELECT * FROM book WHERE book_is_deleted = 0");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }

    // Retrieve all deleted records
    if ($_GET['action'] === 'get_all_deleted') {
        $stmt = $conn->prepare("SELECT * FROM book WHERE book_is_deleted = 1");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create_booking') {
    // Retrieve payload data
    $data = json_decode(file_get_contents("php://input"), true);
  
    // Extract data from payload
    $user_id = $data['user_id'];
    $package = $data['package'];
    $date = $data['date'];
  
    // Insert data into book table
    $stmt = $conn->prepare("INSERT INTO book (user_id, book_package, book_date, book_is_deleted) VALUES (?, ?, ?, 0)");
    $stmt->execute([$user_id, $package, $date]);
  
    // Send success response
    echo json_encode(array('message' => 'Booking created successfully'));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Archive
    if ($data['action'] === 'soft_archive') {
        $book_id = $data['book_id'];

        try {
            $stmt = $conn->prepare("UPDATE book SET book_is_deleted = 1 WHERE book_id = :book_id");
            $stmt->bindParam(':book_id', $book_id);
            $stmt->execute();
            echo json_encode(array("message" => "Booking archived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }

    // Unarchive
    if ($data['action'] === 'soft_unarchive') {
        $book_id = $data['book_id'];

        try {
            $stmt = $conn->prepare("UPDATE book SET book_is_deleted = 0 WHERE book_id = :book_id");
            $stmt->bindParam(':book_id', $book_id);
            $stmt->execute();
            echo json_encode(array("message" => "Booking unarchived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }
}

?>