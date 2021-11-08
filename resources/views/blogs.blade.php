@extends('layouts.frontend')
@section('title','Blog Page')

@section('content')
    {{--    {{$category}}--}}
    <h1>This is a blog page</h1>
    <div class="float-right">
        <a href="{{url('/add-blog')}}" class="btn btn-primary">Add Blog</a>
    </div>
    @foreach($blogs as $item)
        {{$item}}
    @endforeach

    {{--    {{$products}}--}}
@endsection
