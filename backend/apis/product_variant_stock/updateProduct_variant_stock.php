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
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $color_id = htmlspecialchars(strip_tags($data['color_id']));
    $Size_id = htmlspecialchars(strip_tags($data['Size_id']));
    $stock_quantity = htmlspecialchars(strip_tags($data['stock_quantity']));
    $SKU = htmlspecialchars(strip_tags($data['SKU']));
    $description = htmlspecialchars(strip_tags($data['description']));
    $stock_status = htmlspecialchars(strip_tags($data['stock_status']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($product_id)) {
        echo json_encode(['message' => 'Product id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($color_id)) {
        echo json_encode(['message' => 'Color id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($Size_id)) {
        echo json_encode(['message' => 'Size id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($stock_quantity)) {
        echo json_encode(['message' => 'Stock_quantity cannot be empty']);
        http_response_code(422);
        exit();

    ///$product_variant_stock = new \App\Models\Product_variant_stock($product_id, $color_id, $size_id, stock_quantity);
    $product_variant_stock->setId($id);
   
    if ($product_variant_stock->update()) {
        echo json_encode(['message' => 'Product Variant Stock updated successfully']);
    } else {
        echo json_encode(['message' => 'Product Variant Stock not updated']);
    }

}