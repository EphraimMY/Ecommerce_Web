<?php

use App\Router;

require dirname(__DIR__) . '/vendor/autoload.php';
$viewPath = dirname(__DIR__) . '/apis';
$router = new Router($viewPath);

$router -> get('/', '/test', 'home')
        // APIS USERS
        ->get('/api/users','/users/getAllUsers', 'getAllUser')
        ->post('/api/user/register','/users/insertUser', 'insertUser')
        ->put('/api/user/update','/users/updateUser', 'updateUser')
        ->delete('/api/user/delete','/users/deleteUser', 'deleteUser')
        // APIS CATEGORIES
        ->get('/api/categories','/categories/getAllCategories', 'getAllCategory')
        ->post('/api/category/register','/categories/insertCategory', 'insertCategory')
        ->put('/api/category/update','/categories/updateCategory', 'updateCategory')
        ->delete('/api/category/delete','/categories/deleteCategory', 'deleteCategory')
        // APIS PRODUCTS
        ->get('/api/products','/products/getAllProducts', 'getAllProduct')
        ->post('/api/product/register','/products/insertProduct', 'insertProduct')
        ->put('/api/product/update','/products/updateProduct', 'updateProduct')
        ->delete('/api/product/delete','/products/deleteProduct', 'deleteProduct')
        -> run();