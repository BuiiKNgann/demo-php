@extends('admin.admin')

@section('main')

<h1>Danh mục</h1>
<a href="{{ route('category.create')}}" class="btn btn-success">Thêm mới</a>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>

            <td>{{ $cat->id}}</td>
            <td>{{ $cat->name}}</td>
            <td>{{ $cat->status == 0 ? 'Tạm ẩn' : 'Hiển thị'}}</td>
            <td>
                <form action="{{ route('category.destroy', $cat->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-sm btn-primary">Sửa </a>
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>

    </tbody>
    @endforeach
</table>


{{$cats->links()}}

@stop()