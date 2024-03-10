@extends('admin.admin')

@section('main')
<h1>Thêm danh mục</h1>
<form action="{{ route('category.store') }}" method="POST" role="form">
    @csrf
    <div class="col-md-4">
        <legend>Form title</legend>

        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" name="name" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>

            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" checked="checked">

                    Hiển thị
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0">

                    Tạm ẩn
                </label>
            </div>

        </div>




        <button type="submit" class="btn btn-primary">Submit</button>


    </div>
</form>
@stop()