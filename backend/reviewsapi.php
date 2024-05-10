<?php
include 'connection.php';

// Set headers for allowing CORS and specifying JSON content type
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// Handle GET requests
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve all records
    if ($_GET['action'] === 'get_all') {
        $stmt = $conn->prepare("SELECT * FROM reviews WHERE is_deleted = 0");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }

    // Retrieve all deleted records
    if ($_GET['action'] === 'get_all_deleted') {
        $stmt = $conn->prepare("SELECT * FROM reviews WHERE is_deleted = 1");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }

    // Retrieve username based on user_id on the review
    if ($_GET['action'] === 'get_by_id' && isset($_GET['review_id'])) {
        $review_id = $_GET['review_id'];
        $stmt = $conn->prepare("SELECT reviews.*, users.username AS username FROM reviews LEFT JOIN users ON reviews.user_id = users.user_id WHERE review_id = :review_id");
        $stmt->bindParam(':review_id', $review_id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    // Archive
    if ($data['action'] === 'soft_archive') {
        $review_id = $data['review_id'];

        try {
            $stmt = $conn->prepare("UPDATE reviews SET is_deleted = 1 WHERE review_id = :review_id");
            $stmt->bindParam(':review_id', $review_id);
            $stmt->execute();
            echo json_encode(array("message" => "Review archived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }

    // Unarchive
    if ($data['action'] === 'soft_unarchive') {
        $review_id = $data['review_id'];

        try {
            $stmt = $conn->prepare("UPDATE reviews SET is_deleted = 0 WHERE review_id = :review_id");
            $stmt->bindParam(':review_id', $review_id);
            $stmt->execute();
            echo json_encode(array("message" => "Review unarchived successfully"));
        } catch (PDOException $e) {
            echo json_encode(array("error" => $e->getMessage()));
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'new_review') {
    $data = json_decode(file_get_contents("php://input"), true);
  
    // Extract data from payload
    $user_id = $data['user_id'];
    $stars = $data['stars'];
    $content = $data['content'];
  
    // Insert data into book table
    $stmt = $conn->prepare("INSERT INTO reviews (user_id, review_stars, review_content, is_deleted) VALUES (?, ?, ?, 0)");
    $stmt->execute([$user_id, $stars, $content]);
  
    // Send success response
    echo json_encode(array('message' => 'Review created successfully'));
  }
?>
