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
      <a href="{{ route('product.list')}}"><button class="btn btn-primary">danh sách</button></a>
        <form action="{{route('product.updatePro',$product->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">view</label>
                <input type="text" name="view" value="{{$product->view}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
              </div>
              
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">danh mục</label>
            <select name="category_id" id=""  class="form-control">
                @foreach ($category as $item)
                @if ($item->id==$product->category_id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>
                @else
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endif
                    
                @endforeach
                
            </select>
            
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tuổi</label>
            <input type="text" name="tuoi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
    </div>
    
</body>
</html>