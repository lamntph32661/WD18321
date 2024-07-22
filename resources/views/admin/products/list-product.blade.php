@extends('admin.layout.default')
@push('styles')
    
@endpush
@section('content')
    <div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
    <a href="{{route('admin.product.addPro')}}"><button class="btn btn-info">Thêm mới</button></a>
    @if (session('message'))
        <div class="alert alert-primary">
            {{session('message')}}
        </div>
        
    @endif
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>price</th>
            <th>description</th>
            <th>image</th>
            <th>create_at</th>
            <th>update_at</th>
            <th>function</th>
        </tr>
        <tbody>
            @foreach ($products as $item)
                <tr>
                <td>{{$item->product_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td><img src="{{asset($item->image)}}" alt="" height="80px"></td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                {{-- <td><a href="{{route('product.deletePro',$item->id)}}" onclick="return confirm('Bạn có muốn xóa?')">xóa</a> <a href="{{route('product.updatePro',$item->id)}}" >sửa</a></td> --}}
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
@endsection
@push('scripts')
    
@endpush
