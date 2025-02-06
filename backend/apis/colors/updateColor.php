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
    $name = htmlspecialchars(strip_tags($data['name']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($name)) {
        echo json_encode(['message' => 'Name cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$color = new \App\Models\Color($name);
    $color->setId($id);
   
    if ($color->update()) {
        echo json_encode(['message' => 'Color updated successfully']);
    } else {
        echo json_encode(['message' => 'Color not updated']);
    }

}