<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function create()
    {
        return view('createblog');
    }
    public function  insert(Request $request)
    {
        $blog = new Blog();
        $blog->name=$request->input('name');
        $blog->description=$request->input('description');
        $blog->save();
        return redirect('blogs');
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('blogs',compact($blogs));
    }
}
