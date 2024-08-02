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
    <div class="container">   
         <a href="{{route('product.add')}}"><button class="btn btn-primary">Thêm mới</button></a> <form action="{{route('product.timkiem')}}" method="post">@csrf<input type="text" name="timkiem" id="" placeholder="nhập tên"><button class="btn btn-primary" type="submit">tìm kiếm</button></form>
<table border="1px" class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>price</th>
            <th>cate_name</th>
            <th>view</th>
            <th>create_at</th>
            <th>update_at</th>
            <th>function</th>
        </tr>
        <tbody>
            @foreach ($product as $item)
                <tr>
                <td>{{$item->product_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->create_at}}</td>
                <td>{{$item->update_at}}</td>
                <td><a href="{{route('product.deletePro',$item->id)}}" onclick="return confirm('Bạn có muốn xóa?')">xóa</a> <a href="{{route('product.updatePro',$item->id)}}" >sửa</a></td>
            </tr>
            @endforeach
            
        </tbody>
        {{$product->links('pagination::bootstrap-5')}}
    </table></div>
    
</body>
</html>