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
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $message = htmlspecialchars(strip_tags($data['message']));
    $is_read = htmlspecialchars(strip_tags($data['is_read']));
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

    if (empty($message)) {
        echo json_encode(['message' => 'Message cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($is_read)) {
        echo json_encode(['message' => 'Is_read cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($created_at)) {
        echo json_encode(['message' => 'Created_at cannot be empty']);
        http_response_code(422);
        exit();
    }

    //$notifications = new \App\Models\Notifications($user_id, $message, $is_read, $created_at);
    $notifications->setId($id);
   
    if ($notifications->update()) {
        echo json_encode(['message' => 'Notifications updated successfully']);
    } else {
        echo json_encode(['message' => 'Notifications not updated']);
    }

}