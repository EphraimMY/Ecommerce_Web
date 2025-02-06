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
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $street_address = htmlspecialchars(strip_tags($data['street_address']));
    $city = htmlspecialchars(strip_tags($data['city']));
    $state = htmlspecialchars(strip_tags($data['state']));
    $zip_code = htmlspecialchars(strip_tags($data['zip_code']));
    $country = htmlspecialchars(strip_tags($data['country']));

    if (empty($id)) {
        echo json_encode(['message' => 'ID cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($user_id)) {
        echo json_encode(['message' => 'User id\'s cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($street_address)) {
        echo json_encode(['message' => 'Street_address cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($city)) {
        echo json_encode(['message' => 'City cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($state)) {
        echo json_encode(['message' => 'State cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($zip_code)) {
        echo json_encode(['message' => 'Zip_Code cannot be empty']);
        http_response_code(422);
        exit();
    }

    if (empty($country)) {
        echo json_encode(['message' => 'Country cannot be empty']);
        http_response_code(422);
        exit();
    }

    ///$addresses = new \App\Models\Addresses($user_id, $street_address, $city, $state, $zip_code, $country);
    $addresses->setId($id);
   
    if ($addresses->update()) {
        echo json_encode(['message' => 'Addresses updated successfully']);
    } else {
        echo json_encode(['message' => 'Addresses not updated']);
    }

}