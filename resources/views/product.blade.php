@extends('layouts.frontend')
@section('title','Home Page')

@section('content')
    <h1>Products</h1>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Desctiption</th>
        </tr>
        <tbody>
        @foreach($products as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->price}}</td>
                <td>{{$row->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

{{--    {{$products}}--}}
@endsection
