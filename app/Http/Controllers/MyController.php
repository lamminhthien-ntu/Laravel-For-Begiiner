<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public  function index()
    {
        $data="50";
        return view('about')->with('data',$data);
    }

    public  function  show()
    {
        $category = Categories::all();
        $products = Product::all();
        return view('product',compact('products','category'));
    }

    public  function edit($id)
    {
        $products = Product::all();
        $product = $products->find($id);
        return view('edit',compact('product'));
    }
}
