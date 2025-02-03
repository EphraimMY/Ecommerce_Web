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
    $title = htmlspecialchars(strip_tags($data['title']));
    $price = htmlspecialchars(strip_tags($data['price']));
    $category_id = htmlspecialchars(strip_tags($data['category_id']));
    $slug = htmlspecialchars(strip_tags($data['slug']));
    $SKU = htmlspecialchars(strip_tags($data['SKU']));
    $description = htmlspecialchars(strip_tags($data['description']));
    $stock_status = htmlspecialchars(strip_tags($data['stock_status']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($title)) {
        echo json_encode(['message' => 'Title cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($price)) {
        echo json_encode(['message' => 'Price cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($category_id)) {
        echo json_encode(['message' => 'Category ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($slug)) {
        echo json_encode(['message' => 'Slug cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($SKU)) {
        echo json_encode(['message' => 'SKU cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($description)) {
        echo json_encode(['message' => 'Description cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($stock_status)) {
        echo json_encode(['message' => 'Stock status cannot be empty']);
        http_response_code(422);
        exit();
    }

    $product = new \App\Models\Product($title, $price, $category_id, $slug, $SKU, $description, $stock_status);
    $product->setId($id);
   
    if ($product->update()) {
        echo json_encode(['message' => 'Product updated successfully']);
    } else {
        echo json_encode(['message' => 'Product not updated']);
    }

}