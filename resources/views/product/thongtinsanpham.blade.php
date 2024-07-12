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
    <a href="{{ route('product.list')}}"><button class="btn btn-primary">danh sách</button></a>
    <div class="container">
        
<p>ID: {{$product[0]->id}}</p>
<p>Tên: {{$product[0]->name}}</p>
<p>Giá: {{$product[0]->view}}</p>
<p>Danh Mục: {{$product[0]->cate_name}}</p>
<p>Ngày tạo: {{$product[0]->create_at}}</p>
<p>Ngày cập nhật: {{$product[0]->update_at}}</p>
    </div>
    
</body>
</html>