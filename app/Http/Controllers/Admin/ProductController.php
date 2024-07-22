<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function list()  {
        $products=Products::all();
        return view('admin/products/list-product',compact('products'));
    }
    public function addPro()  {
        return view('admin/products/add-product');
    }
    public function postPro(Request $req)  {
        $imageUrl='';
        if ($req->hasFile('image')) {
            $image=$req->file('image');
            $nameImage=time().".".$image->getClientOriginalExtension();
            $link="imageProduct/";
            $image->move(public_path($link),$nameImage);
            $imageUrl=$link.$nameImage;
        }
        $data=[
            'name'=>$req->name,
            'price'=>$req->price,
            'description'=>$req->description,
            'image'=>$imageUrl,
        ];
        Products::create($data);
        return redirect()->route('admin.product.list')->with(['message'=>'thêm mới thành công']);
    }
}
