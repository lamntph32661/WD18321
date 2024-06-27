<?php

use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// GET POST Method HTTP

// http://127.0.0.1:8000/  => Base_url
Route::get('/', function () {
    echo 'Trang chủ';
});
Route::get('/test', function () {
    echo '123';
});

// Params và Slug
Route::get('/list-user', [UserController::class,'showUser']);

// Params 
// http://127.0.0.1:8000/list-user?id=1&name=long

// slug
// http://127.0.0.1:8000/list-user/1
Route::get('/get-user/{id}/{name?}', [UserController::class,'getUser']);

Route::get('/update-user', [UserController::class,'updateUser']);
Route::get('/thong-tin-sinh-vien',[SinhVienController::class,'thongTin']);

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });
