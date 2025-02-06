<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode(['message' => 'Invalid request method']);
    http_response_code(405);
    exit();
}else{
    ///$product_variant_stock = \App\Models\Product_variant_stock::getAll();
    echo json_encode($product_variant_stock);
}