@extends('layouts.frontend')
@section('title','Blog Page')

@section('content')
    {{--    {{$category}}--}}
    <h1>This is a blog page</h1>
    <div class="float-right">
        <a href="{{url('/add-blog')}}" class="btn btn-primary">Add Blog</a>
    </div>

    @if (session('status'))
        <div class="alert-success">
            <h6>{{session('status')}}</h6>
        </div>

    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
             @foreach($blog as $item)
                 <tr>
                     <td>{{$item->name}}</td>
                     <td>{{$item->description}}</td>
                     <td>
                         <a href="{{url('blog-edit/'.$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                         <a href="{{url('blog-delete/'.$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
            @endforeach
        </tbody>
    </table>

    {{--    {{$products}}--}}
@endsection
