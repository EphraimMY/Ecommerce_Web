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
    $message = htmlspecialchars(strip_tags($data['message']));
    $is_read = htmlspecialchars(strip_tags($data['is_read']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));


    if (empty($user_id)) {
        $errors[] = 'User id\'s cannot be empty';
    }

    if (empty($message)) {
        $errors[] = 'Message cannot be empty';
    }

    if (empty($is_read)) {
        $errors[] = 'Is_read cannot be empty';
    }

    if (empty($created_at)) {
        $errors[] = 'Created_at cannot be empty';
    }


    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    //$notifications = new \App\Models\Notifications($user_id, $message, $is_read, $created_at);
    $notifications->create();
    echo json_encode(['message' => 'Notifications inserted successfully']);
}