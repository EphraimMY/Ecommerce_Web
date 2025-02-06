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
    $user_id = htmlspecialchars(strip_tags($data['user_id']));
    $street_address = htmlspecialchars(strip_tags($data['street_address']));
    $city = htmlspecialchars(strip_tags($data['city']));
    $state = htmlspecialchars(strip_tags($data['state']));
    $zip_code = htmlspecialchars(strip_tags($data['zip_code']));
    $country = htmlspecialchars(strip_tags($data['country']));

    if (empty($user_id)) {
        $errors[] = 'User id\'s cannot be empty';
    }

    if (empty($street_address)) {
        $errors[] = 'Street_address cannot be empty';
    }

    if (empty($city)) {
        $errors[] = 'City cannot be empty';
    }

    if (empty($state)) {
        $errors[] = 'State cannot be empty';
    }

    if (empty($zip_code)) {
        $errors[] = 'Zip_Code cannot be empty';
    }

    if (empty($country)) {
        $errors[] = 'Country cannot be empty';
    }




    if (!empty($errors)) {
        echo json_encode(['message' => 'Validation errors', 'errors' => $errors]);
        http_response_code(422);
        exit();
    }


     ///$addresses = new \App\Models\Addresses($user_id, $street_address, $city, $state, $zip_code, $country);
    $addresses->create();
    echo json_encode(['message' => 'Addresses inserted successfully']);
}