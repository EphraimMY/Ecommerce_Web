<?php

use App\Models\User;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $users = User::getAll();
    echo json_encode($users);
} else {
    http_response_code(405);
}