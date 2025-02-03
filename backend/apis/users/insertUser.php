<?php

use App\Models\User;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $data = json_decode(file_get_contents('php://input'));
    $fname = htmlspecialchars(strip_tags($data->fname));
    $lname = htmlspecialchars(strip_tags($data->lname));
    $email = htmlspecialchars(strip_tags($data->email));
    $password = htmlspecialchars(strip_tags($data->password));
    $phoneNumber = htmlspecialchars(strip_tags($data->phoneNumber));
    $role = htmlspecialchars(strip_tags($data->role));
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    switch (true) {
        case empty($fname):
            $errors['fname'] = 'First name is required';
            break;
        case empty($lname):
            $errors['lname'] = 'Last name is required';
            break;
        case empty($email):
            $errors['email'] = 'Email is required';
            break;
        case empty($password):
            $errors['password'] = 'Password is required';
            break;
        case empty($phoneNumber):
            $errors['phoneNumber'] = 'Phone number is required';
            break;
        case empty($role):
            $errors['role'] = 'Role is required';
            break;
    }

    if (!empty($errors)) {
        echo json_encode(['errors' => $errors]);
        http_response_code(422);
        exit();
    }

    // On vérifie s'il existe déjà un utilisateur avec cet email
    $user = User::findByEmail($email);
    if ($user) {
        echo json_encode(['userExist' => 'User already exists']);
        http_response_code(400);
        exit();
    }

    $user = new User($fname, $lname, $email, $passwordHash, $phoneNumber, $role);
    if ($user->save()) {
        echo json_encode(['message' => 'User created successfully']);
    } else {
        echo json_encode(['error' => 'Failed to create user']);
    }

}else{
    echo json_encode(['error' => 'Invalid request method']);
}