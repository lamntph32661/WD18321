<?php

use App\Http\Controllers\ProductController;
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

Route::group(['prefix'=>'users','as'=>'users.'],function () {
    Route::get('list-users',[UserController::class,'listUser'])->name('listUsers');
    Route::get('add-users',[UserController::class,'addUsers'])->name('addUsers');
    Route::post('add-users',[UserController::class,'addPostUsers'])->name('addPostUsers');
    Route::get('delete-users/{idUser}',[UserController::class,'deleteUsers'])->name('deleteUsers');
    Route::get('update-users/{idUser}',[UserController::class,'updateUsers'])->name('updateUsers');
    Route::post('update-users/{idUser}',[UserController::class,'updatePostUsers'])->name('updatePostUsers');
});
Route::group(['prefix'=>'product', 'as'=>'product.'],function ()  {
    Route::get('list',[ProductController::class,'list'])->name('list');
    Route::get('add',[ProductController::class,'add'])->name('add');
    Route::post('add',[ProductController::class,'postProduct'])->name('add');
    Route::get('deletePro/{idPro}',[ProductController::class,'deletePro'])->name('deletePro');
    Route::get('updatePro/{idPro}',[ProductController::class,'updatePro'])->name('updatePro');
    Route::post('updatePro/{idPro}',[ProductController::class,'updatePostPro'])->name('updatePro');
    Route::post('timkiem',[ProductController::class,'timkiem'])->name('timkiem');
});
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
