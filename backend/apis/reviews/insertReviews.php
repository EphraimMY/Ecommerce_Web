<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['message' => 'Invalid request method']);
    http_response_code(405);
    exit();
}else{
    $errors = [];
    $data = json_decode(file_get_contents("php://input"), true);
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $rating = htmlspecialchars(strip_tags($data['rating']));
    $comment = htmlspecialchars(strip_tags($data['comment']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));

    if (empty($user_id)) {
        $errors[] = 'User id\'s cannot be empty';
    }

    if (empty($product_id)) {
        $errors[] = 'Product id\'s cannot be empty';
    }

    if (empty($rating)) {
        $errors[] = 'Rating cannot be empty';
    }

    if (empty($comment)) {
        $errors[] = 'Comment cannot be empty';
    }

    if (empty($created_at)) {
        $errors[] = 'Created_at cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$reviews = new \App\Models\Reviews( $user_id, $product_id, $rating, $comment, $created_at);
    $reviews->create();
    echo json_encode(['message' => 'Reviews inserted successfully']);
}