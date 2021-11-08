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
        return redirect('blog');
    }

    public function  edit($id)
    {
        $blog = Blog::find($id);
        return view('blog-edit',compact('blog'));
    }

    public function index()
    {
        $blog = Blog::all();
        return view('blogs',compact('blog'));
    }

    public  function update(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->name=$request->input('name');
        $blogs->description=$request->input('description');
        $blogs->update();
        return redirect('blogs');
    }

    public  function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('blogs')->with('status','Blog Deleted Successfully');


    }

}
