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
                <td>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" value="{{$product->id}}">
                    </div>
                </td>

                <td>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" value="{{$product->categories->name}}">
                    </div>
                </td>

                <td>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{$product->name}}">
                    </div>
                </td>

                <td>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" value="{{$product->price}}">
                    </div>
                </td>

                <td>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" value="{{$product->description}}">
                    </div>
                </td>

            </tr>
        </tbody>
    </table>

    {{--    {{$products}}--}}
@endsection
