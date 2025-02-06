<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
    echo json_encode(['message' => 'Invalid request method']);
    http_response_code(405);
    exit();
}else{
    $data = json_decode(file_get_contents("php://input"), true);
    $id = htmlspecialchars(strip_tags($data['id']));
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $rating = htmlspecialchars(strip_tags($data['rating']));
    $comment = htmlspecialchars(strip_tags($data['comment']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($user_id)) {
        echo json_encode(['message' => 'User id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($product_id)) {
        echo json_encode(['message' => 'Product id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($rating)) {
        echo json_encode(['message' => 'Rating cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($comment)) {
        echo json_encode(['message' => 'Comment cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($created_at)) {
        echo json_encode(['message' => 'Created_at cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$reviews = new \App\Models\Reviews($user_id, $product_id, $rating, $comment, $created_at);
    $reviews->setId($id);
   
    if ($reviews->update()) {
        echo json_encode(['message' => 'Reviews updated successfully']);
    } else {
        echo json_encode(['message' => 'Reviews not updated']);
    }

}