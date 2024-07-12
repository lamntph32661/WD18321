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
        
        <form action="{{route('users.addPostUsers')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phòng ban</label>
            
            <select name="phongban_id" id="" class="form-control" id="exampleInputEmail1" >
                @foreach ($listPhongBan as $item)
                    <option value="{{$item->id}}">{{$item->ten_donvi}}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tuổi</label>
            <input type="text" name="tuoi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
        </form><a href="{{route('users.listUsers')}}"><button  class="btn btn-secondary">List</button></a>
    </div>
    
</body>
</html>