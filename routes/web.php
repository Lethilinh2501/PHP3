<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

// http://127.0.0.1:8000/users/create-user
// get, post, put, delete -> return view(get)
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');
    Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
    Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addPostUsers');
    Route::get('update-users/{userId}', [UserController::class, 'updateUsers'])->name('updateUsers');
    Route::put('update-users/{userId}', [UserController::class, 'updatePostUsers'])->name('updatePostUsers');
    Route::delete('delete-users/{userId}', [UserController::class, 'deleteUsers'])->name('deleteUsers');
});
