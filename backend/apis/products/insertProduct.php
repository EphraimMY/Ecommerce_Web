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
    $title = htmlspecialchars(strip_tags($data['title']));
    $price = htmlspecialchars(strip_tags($data['price']));
    $category_id = htmlspecialchars(strip_tags($data['category_id']));
    $slug = htmlspecialchars(strip_tags($data['slug']));
    $SKU = htmlspecialchars(strip_tags($data['SKU']));
    $description = htmlspecialchars(strip_tags($data['description']));
    $stock_status = htmlspecialchars(strip_tags($data['stock_status']));

    if (empty($title)) {
        $errors[] = 'Title cannot be empty';
    }

    if (empty($price)) {
        $errors[] = 'Price cannot be empty';
    }

    if (empty($category_id)) {
        $errors[] = 'Category ID cannot be empty';
    }

    if (empty($slug)) {
        $errors[] = 'Slug cannot be empty';
    }

    if (empty($SKU)) {
        $errors[] = 'SKU cannot be empty';
    }

    if (empty($description)) {
        $errors[] = 'Description cannot be empty';
    }

    if (empty($stock_status)) {
        $errors[] = 'Stock status cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    $product = new \App\Models\Product( $title, $price, $category_id, $slug, $SKU, $description, $stock_status);
    $product->create();
    echo json_encode(['message' => 'Product inserted successfully']);
}