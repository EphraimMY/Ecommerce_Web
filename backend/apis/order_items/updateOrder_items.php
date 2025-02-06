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
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $variant_id = htmlspecialchars(strip_tags($data['variant_id']));
    $quantity = htmlspecialchars(strip_tags($data['quantity']));
    $price = htmlspecialchars(strip_tags($data['price']));

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

    if (empty($product_id)) {
        echo json_encode(['message' => 'Product id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($variant_id)) {
        echo json_encode(['message' => 'Variant id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($quantity)) {
        echo json_encode(['message' => 'Quantity cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($price)) {
        echo json_encode(['message' => 'Price cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$order_items = new \App\Models\Order_items($order_id, $product_id, $variant_id, $quantity, $price);
    $order_items->setId($id);
   
    if ($order_items->update()) {
        echo json_encode(['message' => 'Order_items updated successfully']);
    } else {
        echo json_encode(['message' => 'Order_items not updated']);
    }

}