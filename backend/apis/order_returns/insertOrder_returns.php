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
    $order_id = htmlspecialchars(strip_tags($data['order_id']));
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $reason = htmlspecialchars(strip_tags($data['reason']));
    $status = htmlspecialchars(strip_tags($data['status']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));

    if (empty($order_id)) {
        $errors[] = 'Order id\'s cannot be empty';
    }

    if (empty($user_id)) {
        $errors[] = 'User_id\'s cannot be empty';
    }

    if (empty($reason)) {
        $errors[] = 'Reason cannot be empty';
    }

    if (empty($status)) {
        $errors[] = 'Status cannot be empty';
    }

    if (empty($created_at)) {
        $errors[] = 'Created_at cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$order_returns = new \App\Models\Order_returns($order_id, $user_id, $reason, $status, $created_at);
    $order_returns->create();
    echo json_encode(['message' => 'Order_returns inserted successfully']);
}