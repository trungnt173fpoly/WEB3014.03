@extends('layout')
@section('title', $title)
@section('content')
 @if (isset($_SESSION['success'])&& isset($_GET['msg']))
        <div>
            <span>{{$_SESSION['success']}}</span>
        </div>
    @endif
<a href="{{route('product/add')}}"><button>Thêm mới sản phẩm</button></a>
    <h1>{{$title}}</h1>
    <table>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Hình ảnh sản phẩm</td>
            <td>Số lượng sản phẩm</td>
            <td>Trạng thái sản phẩm</td>
            <td>Hành động</td>
        </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
                <img src="{{storage($product->image)}}" alt="" width="100px" height="100px">
            </td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->status}}</td>
            <td>
                <a href="{{route('product/edit/{id}', ["id"=>$product->id])}}"><button>Sửa</button></a>
                <a href="{{route('product/delete/{id}', ["id"=>$product->id])}}"><button>Xóa</button></a>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
