<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

// đường dẫn gốc
// http://127.0.0.1:8000/ base url
// GET, POST, PUT, PATCH, DELETE (method http)


Route::get('/', function () {
    echo 'Trang chủ';
});

Route::get('/test', function () {
    echo 'abc';
});

// định tuyến và điều hướng qua action sang controller
// php artisan make:controller TênController

Route::get('/list-product', [ProductController::class, 'showProduct']);

// Gửi dữ liệu qua Controller
// Slug
// http://127.0.0.1:8000/get-product/4
Route::get('/get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

//Params
// http://127.0.0.1:8000/update-product?id=4&name=abc
Route::get('/update-product', [ProductController::class, 'updateProduct']);
