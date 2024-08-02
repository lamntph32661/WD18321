<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    function login()
    {
        return view('login');
    }
    function postLogin(Request $req)
    {
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password,
        ];
        $remember=$req->filled('remember');
        if (Auth::attempt($dataUserLogin, $remember)) {
            
            if (Auth::user()->role=='1') {
                return  redirect()->route('admin.product.list')->with(['message' => 'đăng nhập thành công']);
            }else {
                echo 'User';
            }
        } else {
            return redirect()->route('login')->with(['message' => 'đăng nhập thất bại']);
        }
    }
    function logout() {
        Auth::logout();
        return redirect()->route('login')->with(['message' => 'đăng xuất thành công']);
    }
}
