<?php

use App\Models\User;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $data = json_decode(file_get_contents('php://input'));
    $email = htmlspecialchars(strip_tags($data->email));
    $user = User::findByEmail($email);
    if ($user) {
        $user->setFname(htmlspecialchars(strip_tags($data->fname)));
        $user->setLname(htmlspecialchars(strip_tags($data->lname)));
        $user->setEmail(htmlspecialchars(strip_tags($data->email)));
        $user->setPhoneNumber(htmlspecialchars(strip_tags($data->phoneNumber)));
        $user->setRole(htmlspecialchars(strip_tags($data->role)));
        if ($user->update()) {
            echo json_encode(['message' => 'User updated successfully']);
        } else {
            echo json_encode(['error' => 'Failed to update user']);
        }
    } else {
        echo json_encode(['error' => 'User not found']);
    }
} else {
    http_response_code(405);
}