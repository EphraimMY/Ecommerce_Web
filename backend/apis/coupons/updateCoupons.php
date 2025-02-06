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
    $code = htmlspecialchars(strip_tags($data['code']));
    $discount_type = htmlspecialchars(strip_tags($data['discount_type']));
    $discount_value = htmlspecialchars(strip_tags($data['discount_value']));
    $expiry_date = htmlspecialchars(strip_tags($data['expiry_date']));
    $min_order_amount = htmlspecialchars(strip_tags($data['min_order_amount']));
    $max_uses = htmlspecialchars(strip_tags($data['max_uses']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($code)) {
        echo json_encode(['message' => 'Code cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($discount_type)) {
        echo json_encode(['message' => 'Discount type\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($discount_value)) {
        echo json_encode(['message' => 'Discount value\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($expiry_date)) {
        echo json_encode(['message' => 'Expiry_date cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($min_order_amount)) {
        echo json_encode(['message' => 'Min_order_amount cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($max_uses)) {
        echo json_encode(['message' => 'Max_uses cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$coupons = new \App\Models\Coupons($code, $discount_type, $discount_value, $expiry_date, $min_order_amount, $max_uses);
    $coupons->setId($id);
   
    if ($coupons->update()) {
        echo json_encode(['message' => 'Coupons updated successfully']);
    } else {
        echo json_encode(['message' => 'Coupons not updated']);
    }

}