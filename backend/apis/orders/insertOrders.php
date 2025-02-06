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
    $total_price = htmlspecialchars(strip_tags($data['total_price']));
    $coupon_id = htmlspecialchars(strip_tags($data['coupon_id']));
    $shipping_fee = htmlspecialchars(strip_tags($data['shipping_fee']));
    $status = htmlspecialchars(strip_tags($data['status']));
    $created_at = htmlspecialchars(strip_tags($data['created_at']));

    if (empty($user_id)) {
        $errors[] = 'User id\'s cannot be empty';
    }

    if (empty($total_price)) {
        $errors[] = 'Total_price cannot be empty';
    }

    if (empty($coupon_id)) {
        $errors[] = 'Coupon id\'s cannot be empty';
    }

    if (empty($shipping_fee)) {
        $errors[] = 'Shipping_fee cannot be empty';
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


    ///$orders = new \App\Models\Orders($user_id, $total_price, $coupon_id, $shipping_fee, $status, $created_at);
    $orders->create();
    echo json_encode(['message' => 'Orders inserted successfully']);
}