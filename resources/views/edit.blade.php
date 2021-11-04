@extends('layouts.frontend')
@section('title','Edit Page')

@section('content')
    {{--    {{$category}}--}}
    <h1>Edit Product</h1>

    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Desctiption</th>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" value="{{$product->id}}"></td>
                <td><input type="text" value="{{$product->categories->name}}"></td>
                <td><input type="text" value="{{$product->name}}"></td>
                <td><input type="text" value="{{$product->price}}"></td>
                <td><input type="text" value="{{$product->description}}"></td>
            </tr>
        </tbody>
    </table>

    {{--    {{$products}}--}}
@endsection
