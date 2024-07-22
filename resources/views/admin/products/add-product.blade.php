@extends('admin.layout.default')
@push('styles')
    
@endpush
@section('content')
    <div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Thêm sản phẩm</h4>
    <form action="{{route('admin.product.addPro')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="" >name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="" >price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="" >description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="" >image</label>
            <input type="file" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
    
    
    </div>
@endsection
@push('scripts')
    
@endpush
