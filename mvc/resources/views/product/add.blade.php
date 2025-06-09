@extends('layout')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" placeholder="Nhâp tên sản phẩm">
        </div>
        <div>
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price" placeholder="Nhâp giá sản phẩm">
        </div>
        <div>
            <label for="">Hình ảnh sản phẩm</label>
            <input type="file" name="imgae">
        </div>
        <div>
            <label for="">Số lượng sản phẩm</label>
            <input type="text" name="name" placeholder="Nhâp tên sản phẩm">
        </div>
        <div>
            <label for="">Trạng thái sản phẩm</label>
            <select name="status" id="">
                <option value="1">Hoạt động</option>
                <option value="2">Dừng hoạt động</option>
            </select>
        </div>
    </form>
@endsection
