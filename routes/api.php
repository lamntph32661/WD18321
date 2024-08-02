<?php

use App\Http\Controllers\Api\ProductController;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// http://127.0.0.1:8000/api/list-product (Danh sách product)

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('list-product',[ProductController::class,'listProduct']);

// http://127.0.0.1:8000/api/product/41 (Chi tiết product)
Route::get('product/{idProduct}',[ProductController::class,'getProduct']);
// http://127.0.0.1:8000/api/product/
Route::post('product',[ProductController::class,'addProduct']);

// http://127.0.0.1:8000/api/product/
Route::patch('product',[ProductController::class,'updateProduct']);

// http://127.0.0.1:8000/api/product/
Route::delete('product',[ProductController::class,'deleteProduct']);