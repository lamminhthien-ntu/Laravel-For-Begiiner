@extends('layouts.frontend')
@section('title','Home Page')

@section('content')
{{--    {{$category}}--}}
    <h1>Products</h1>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Desctiption</th>
            <th>Edit</th>
        </tr>
        <tbody>
        @foreach($products as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->categories->name}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->price}}</td>
                <td>{{$row->description}}</td>
                <td><a href="{{url('edit/'.$row->id)}}" class="btn btn-primary">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    {{$products}}--}}
@endsection
