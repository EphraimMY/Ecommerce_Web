<?php

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

    ///$color = \App\Models\Color::delete($id);
    if ($color) {
        echo json_encode(['message' => 'Color deleted successfully']);
    } else {
        echo json_encode(['message' => 'Color not found']);
    }
}