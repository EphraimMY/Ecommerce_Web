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
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $variant_id = htmlspecialchars(strip_tags($data['variant_id']));
    $quantity = htmlspecialchars(strip_tags($data['quantity']));
    $price = htmlspecialchars(strip_tags($data['price']));

    if (empty($order_id)) {
        $errors[] = 'Order id\'s cannot be empty';
    }

    if (empty($product_id)) {
        $errors[] = 'Product id\'s cannot be empty';
    }

    if (empty($variant_id)) {
        $errors[] = 'Variant id\'s cannot be empty';
    }

    if (empty($quantity)) {
        $errors[] = 'Quantity cannot be empty';
    }

    if (empty($price)) {
        $errors[] = 'Price cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$order_items = new \App\Models\Order_items($order_id, $product_id, $variant_id, $quantity, $price);
    $order_items->create();
    echo json_encode(['message' => 'Order_items inserted successfully']);
}