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
    $order_id = htmlspecialchars(strip_tags($data['order_id']));
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $reason = htmlspecialchars(strip_tags($data['reason']));
    $status = htmlspecialchars(strip_tags($data['status']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($order_id)) {
        echo json_encode(['message' => 'Order id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($user_id)) {
        echo json_encode(['message' => 'User id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($reason)) {
        echo json_encode(['message' => 'Reason cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($status)) {
        echo json_encode(['message' => 'Status cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($created_at)) {
        echo json_encode(['message' => 'Created_at cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$order_returns = new \App\Models\Order_returns($order_id, $user_id, $reason, $status, $created_at);
    $order_returns->setId($id);
   
    if ($order_returns->update()) {
        echo json_encode(['message' => 'Order_returns updated successfully']);
    } else {
        echo json_encode(['message' => 'Order_returns not updated']);
    }

}