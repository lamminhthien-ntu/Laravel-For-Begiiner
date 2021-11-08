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
                <form method="post" action="{{url('blog-update/'.$blog->id)}}">
                    @csrf
                    <td>
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" disabled  class="form-control" value="{{$blog->id}}">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"  class="form-control" name="name" value="{{$blog->name}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" value="{{$blog->description}}">
                        </div>
                    </td>
                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                </form>
            </tr>
        </tbody>
    </table>

    {{--    {{$products}}--}}
@endsection
