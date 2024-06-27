<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    function thongTin()  {
        $sinhVien=[
          
            'id'=>1,
            'name'=>'lam',
            'tuoi'=>20,
            'gioitinh'=>'nam'
          
        ];
        return view('list-sinh-vien')->with(['sinhVien'=>$sinhVien]);
    }
}
