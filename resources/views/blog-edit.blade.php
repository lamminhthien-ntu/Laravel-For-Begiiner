@extends('layouts.frontend')
@section('title','Blog Page')

@section('content')
    {{--    {{$category}}--}}
    <h1>This is a blog page</h1>
    <div class="float-right">
        <a href="{{url('/add-blog')}}" class="btn btn-primary">Add Blog</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="text" value="{{$blog->id}}"> </td>
                <td> <input type="text" value="{{$blog->name}}"> </td>
                <td> <input type="text" value="{{$blog->description}}"> </td>
                <td><button type="submit" class="btn btn-primary">Update</button></td>
            </tr>
        </tbody>
    </table>

    {{--    {{$products}}--}}
@endsection
