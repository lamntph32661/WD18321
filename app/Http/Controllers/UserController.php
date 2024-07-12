<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser()
    {
        //     $users=[
        //         [
        //             'id'=>1,
        //             'name'=>'lam'
        //         ],
        //         [
        //             'id'=>2,
        //             'name'=>'lam2'
        //         ],
        //     ];
        //    return view('list-user')->with([
        //     'users'=>$users
        //    ]);

        // // lấy danh sách user
        // $listUser= DB::table('users')->get();
        // dd($listUser);

        // // lấy thông tin user có id = 4
        // $result=DB::table('users')->where('id','=','4')->first();
        // $result=DB::table('users')->find('4');  // chỉ dùng với id
        // dd($result);

        // // lấy thuộc tính 'name' của user có id = 16
        // $result=DB::table('users')->where('id','=','16')->value('name');
        // dd($result);

        // // lấy danh sách id  của phòng ban 'Ban giám hiệu'
        // $idPhongBan=DB::table('phongban')->where('ten_donvi','like','%Ban giám hiệu%')->value('id');
        // $result=DB::table('users')->where('phongban_id',$idPhongBan)->pluck('id');
        // dd($result);

        // // tìm user có độ tuổi cao nhất
        // $result=DB::table('users')->where('tuoi',DB::table('users')->max('tuoi'))->get()
        // ;
        // dd($result);

        // // tìm user có độ tuổi nhỏ nhất
        // $result=DB::table('users')->where('tuoi',DB::table('users')->min('tuoi'))->get();
        // dd($result);

        // // đếm xem phòng ban giám hiệu có bao nhiêu user
        // $idPhongBan=DB::table('phongban')->where('ten_donvi','like','%Ban giám hiệu%')->value('id');
        // $result=DB::table('users')->where('phongban_id',$idPhongBan)->count('id');
        // dd($result);

        // // lấy danh sách tuổi của user
        // $result=DB::table('users')->distinct()->pluck('tuoi');
        // dd($result);

        // // tìm danh sách user có tên là hải hoặc thanh
        // $result=DB::table('users')->where('name','like','%Khải%')->orWhere('name','like','%Thanh%')->get();
        // dd($result);

        // // lấy danh sách user của phòng ban 'Ban đào tạo'
        // $result = DB::table('users')->where('phongban_id',DB::table('phongban')->where('ten_donvi','like','%Ban đào tạo%')->value('id'))->get();
        // dd($result);

        // // Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')->where('tuoi','>=',30)->orderBy('tuoi','asc')->get();
        // dd($result);

        // // Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')->orderBy('tuoi','desc')->offset(5)->limit(10)->get();
        // dd($result);

        // // Thêm một user mới vào công ty
        // DB::table('users')->insert([
        //         'name'=>'Nguyễn Thanh Lâm',
        //         'email'=>'lamntph32661',
        //         'phongban_id'=>'1',

        //         'tuoi'=>'20',
        //         'created_at'=>Carbon::now(),
        // ]);

        // // Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        // $result = DB::table('users')->where('phongban_id',DB::table('phongban')
        // ->where('ten_donvi','like','%Ban đào tạo%')->value('id'))->pluck('name');

        // DB::table('users')->where('phongban_id',DB::table('phongban')
        // ->where('ten_donvi','like','%Ban đào tạo%')->value('id'))->update(['name'=>'']);

        // dd($result);

        // // xóa user nghỉ quá 15 ngày
        // DB::table('users')->where('songaynghi','>','15')->delete();
    }
    // function getUser($id,$name='')  {
    //     echo $id.'<br>';
    //     echo $name;
    // }
    // function updateUser(Request $request)  {
    //     echo $request->id;
    // }

    public function listUser()
    {
        $listUsers = DB::table('users')
        ->join('phongban','phongban.id','=','users.phongban_id')
        ->select('users.id','users.name','users.email','users.songaynghi','users.tuoi','users.phongban_id','phongban.ten_donvi')
        ->get();
        return View('users/listUsers')->with(['listUsers'=>$listUsers]);
    }
    public function addUsers() {
        $listPhongBan=DB::table('phongban')->get();
        return view('users/addUsers')->with(['listPhongBan'=>$listPhongBan]);
    }
    public function addPostUsers(Request $req)  {
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phongban_id'=>$req->phongban_id,
            'songaynghi'=>0,
            'tuoi'=>$req->tuoi,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.listUsers');
        // return view('users/listUsers')->with()
    }
    public function deleteUsers($idUser) {
        DB::table('users')->where('id',$idUser)->delete();
        return redirect()->route('users.listUsers');
    }
    public function updateUsers($idUser) {
       $user= DB::table('users')->find($idUser);
        $phongban=DB::table('phongban')->get();
        // dd($user);
        return view('users/update')->with(['user'=>$user,'phongban'=>$phongban]);
    }
    public function updatePostUsers($idUser, Request $req) {
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phongban_id'=>$req->phongban_id,
            'songaynghi'=>$req->songaynghi,
            'tuoi'=>$req->tuoi,
            'updated_at'=>Carbon::now()
        ];
        DB::table('users')->where('id',$idUser)->update($data);
        return redirect()->route('users.listUsers');
    }
}
