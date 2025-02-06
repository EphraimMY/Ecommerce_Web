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
    $order_id = htmlspecialchars(strip_tags($data['order_id']));
    $statut = htmlspecialchars(strip_tags($data['statut$statut']));
    $updated_at = htmlspecialchars(strip_tags($data['updated_at']));

    if (empty($order_id)) {
        $errors[] = 'Order id\'s cannot be empty';
    }

    if (empty($statut)) {
        $errors[] = 'Statut cannot be empty';
    }

    if (empty($updated_at)) {
        $errors[] = 'Updated_at cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


    ///$order_tracking = new \App\Models\Order_tracking($order_id, $statut, $updated_at);
    $order_tracking->create();
    echo json_encode(['message' => 'Order_tracking inserted successfully']);
}