<?php

namespace App\Http\Controllers;

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
        $products = Product::all();
        return view('product',compact('products'));
    }
}
