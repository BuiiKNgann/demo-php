@extends('admin.admin')

@section('main')
<h1>Chỉnh sửa danh mục</h1>
<form action="{{ route('category.update', $category->id) }}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="col-md-4">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" value="{{ $category->name}}" name="name" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>

                    Hiển thị
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>

                    Tạm ẩn
                </label>
            </div>

        </div>




        <button type="submit" class="btn btn-primary">Submit</button>


    </div>
</form>
@stop()