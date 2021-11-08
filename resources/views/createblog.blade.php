@extends('layouts.frontend')

@section('content')
    <form method="post" action="{{url('save-blog')}}">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blog Name</label>
            <input type="text" class="form-control" name="name" >

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Blog Description</label>
            <input type="text" class="form-control" name="description">
        </div>
{{--        <div class="mb-3 form-check">--}}
{{--            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Save Blog</button>
    </form>
@endsection
