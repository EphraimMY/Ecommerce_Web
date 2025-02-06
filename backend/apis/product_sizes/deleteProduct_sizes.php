<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    echo json_encode(['message' => 'Invalid request method']);
    http_response_code(405);
    exit();
}else{
    $errors = [];
    $data = json_decode(file_get_contents("php://input"), true);
    $id = htmlspecialchars(strip_tags($data['id']));

    if (empty($id)) {
        $errors[] = 'ID cannot be empty';
    }

    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }

    ///$product_sizes = \App\Models\Product_size::delete($id);
    if ($product_sizes) {
        echo json_encode(['message' => 'Product size\'s deleted successfully']);
    } else {
        echo json_encode(['message' => 'Product size\'s not found']);
    }
}