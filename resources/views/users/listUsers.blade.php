<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('users.addUsers')}}"><button class="btn btn-primary">Thêm mới</button></a>
    <div class="container"><table border="1px" class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phòng ban</th>
            <th>Số ngày nghỉ</th>
            <th>Tuổi</th>
            <th>function</th>
        </tr>
        <tbody>
            @foreach ($listUsers as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->ten_donvi}}</td>
                <td>{{$item->songaynghi}}</td>
                <td>{{$item->tuoi}}</td>
                <td><a href="{{route('users.deleteUsers',$item->id)}}" onclick="return confirm('Bạn có muốn xóa')">Xóa</a> <a href="{{route('users.updateUsers',$item->id)}}" >sửa</a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table></div>
    
</body>
</html>