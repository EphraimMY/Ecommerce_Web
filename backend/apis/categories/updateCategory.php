<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
    echo json_encode(['message' => 'Invalid request method']);
    http_response_code(405);
    exit(); 
}else{
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $name = $data['name'];
    $slug = $data['slug'];
    if(empty($id) || empty($name) || empty($slug)){
        echo json_encode(['message' => 'All fields are required']);
        exit();
    }
    $category = \App\Models\Category::findById($id);
    if(!$category){
        echo json_encode(['message' => 'Category not found']);
        exit();
    }
    $category->setName($name);
    $category->setSlug($slug);
    $category->update();
    echo json_encode(['message' => 'Category updated successfully']);
    exit();
}