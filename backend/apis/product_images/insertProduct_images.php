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
    $product_id = htmlspecialchars(strip_tags($data['product_id']));
    $image_url = htmlspecialchars(strip_tags($data['image_url']));


    if (empty($product_id)) {
        $errors[] = 'Product id\'s cannot be empty';
    }

    if (empty($image_url)) {
        $errors[] = 'Image_url cannot be empty';
    }


    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$product_images = new \App\Models\Product_images( $product_id, $image_url);
    $product_images->create();
    echo json_encode(['message' => 'Product images inserted successfully']);
}