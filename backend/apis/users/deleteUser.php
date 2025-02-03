<?php

use App\Models\User;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $data = json_decode(file_get_contents('php://input'));
    $user = htmlspecialchars(strip_tags($data->email));
    $user = User::findByEmail($user);
    if ($user) {
        if ($user->delete()) {
            echo json_encode(['message' => 'User deleted successfully']);
        } else {
            echo json_encode(['error' => 'Failed to delete user']);
        }
    } else {
        echo json_encode(['error' => 'User not found']);
    }
} else {
    http_response_code(405);
}