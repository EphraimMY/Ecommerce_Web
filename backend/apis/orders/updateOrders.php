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
    $total_price = htmlspecialchars(strip_tags($data['total_price']));
    $coupon_id = htmlspecialchars(strip_tags($data['coupon_id']));
    $shipping_fee = htmlspecialchars(strip_tags($data['shipping_fee']));
    $status = htmlspecialchars(strip_tags($data['status']));
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

    if (empty($total_price)) {
        echo json_encode(['message' => 'Total_price cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($coupon_id)) {
        echo json_encode(['message' => 'Coupon id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($shipping_fee)) {
        echo json_encode(['message' => 'Shipping_fee cannot be empty']);
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

    ///$orders = new \App\Models\Orders($user_id, $total_price, $coupon_id, $shipping_fee, $status, $created_at);
    $orders->setId($id);
   
    if ($orders->update()) {
        echo json_encode(['message' => 'Orders updated successfully']);
    } else {
        echo json_encode(['message' => 'Orders not updated']);
    }

}