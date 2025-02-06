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
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $image_url = htmlspecialchars(strip_tags($data['image_url']));

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

    if (empty($image_url)) {
        echo json_encode(['message' => 'image_url cannot be empty']);
        http_response_code(422);
        exit();
    }

    //$product_images = new \App\Models\Product_images($product_id, $image_url);
    $product_images->setId($id);
   
    if ($product_images->update()) {
        echo json_encode(['message' => 'Product image\'s updated successfully']);
    } else {
        echo json_encode(['message' => 'Product image\'s not updated']);
    }

}