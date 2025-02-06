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
    $code = htmlspecialchars(strip_tags($data['code']));
    $discount_type = htmlspecialchars(strip_tags($data['discount_type']));
    $discount_value = htmlspecialchars(strip_tags($data['discount_value']));
    $expiry_date = htmlspecialchars(strip_tags($data['expiry_date']));
    $min_order_amount = htmlspecialchars(strip_tags($data['min_order_amount']));
    $max_uses = htmlspecialchars(strip_tags($data['max_uses']));

    if (empty($code)) {
        $errors[] = 'Code cannot be empty';
    }

    if (empty($discount_type)) {
        $errors[] = 'Discount type\'s cannot be empty';
    }

    if (empty($discount_value)) {
        $errors[] = 'Discount value\'s cannot be empty';
    }

    if (empty($expiry_date)) {
        $errors[] = 'Expiry_date cannot be empty';
    }

    if (empty($min_order_amount)) {
        $errors[] = 'Min_order_amount cannot be empty';
    }

    if (empty($max_uses)) {
        $errors[] = 'Max_uses cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$coupons = new \App\Models\Coupons($code, $discount_type, $discount_value, $expiry_date, $min_order_amount, $max_uses);
    $coupons->create();
    echo json_encode(['message' => 'Coupons inserted successfully']);
}