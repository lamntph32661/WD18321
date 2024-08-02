<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $listProduct = Products::select('product_id', 'name', 'price')->get();
        return response()->json([
            'data' => $listProduct,
            'status_code' => 'success'
        ], 200);
    }
    public function getProduct($idProduct)
    {
        $getProduct = Products::select('product_id', 'name', 'price')->where('product_id', $idProduct)->get();
        return response()->json([
            'data' => $getProduct,
            'status_code' => 'success'
        ], 200);
    }
    public function addProduct(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        $data = $req->all('name', 'price');
        $newProduct = Products::create($data);
        return response()->json([
            'data' => $newProduct,
            'status_code' => 'success'
        ], 200);
    }
    function updateProduct(Request $req) {
        $req->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        $data = $req->all('name', 'price','description');
        $Product = Products::find($req->product_id);
        $Product->update($data);
        return response()->json([
            'data' => $Product,
            'status_code' => 'success'
        ], 200);
    }
    function deleteProduct(Request $req)  {
        $req->validate([
            
            'product_id' => 'required',

        ]);
        Products::find($req->product_id)->delete();
        return response()->json([
            'message' => 'success',
            'status_code' => 'success'
        ], 200);
    }
}
