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
    $order_id = htmlspecialchars(strip_tags($data['order_id']));
    $statut = htmlspecialchars(strip_tags($data['statut$statut']));
    $updated_at = htmlspecialchars(strip_tags($data['updated_at']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($order_id)) {
        echo json_encode(['message' => 'Order id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($statut)) {
        echo json_encode(['message' => 'Statut cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($updated_at)) {
        echo json_encode(['message' => 'Updated_at cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$order_tracking = new \App\Models\Order_tracking($order_id, $statut, $updated_at);
    $order_tracking->setId($id);
   
    if ($order_tracking->update()) {
        echo json_encode(['message' => 'Order_tracking updated successfully']);
    } else {
        echo json_encode(['message' => 'Order_tracking not updated']);
    }

}