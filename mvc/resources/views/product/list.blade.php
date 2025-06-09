@extends('layout')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <table>
        <tr>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Hình ảnh sản phẩm</td>
            <td>Số lượng sản phẩm</td>
            <td>Trạng thái sản phẩm</td>
        </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->status}}</td>
        </tr>
    @endforeach
    </table>
@endsection
