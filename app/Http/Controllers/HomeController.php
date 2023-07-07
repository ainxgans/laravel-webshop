<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortByDesc('created_at')->take(6);

        // dd($products->thumbnail);
        return view('home', ['title' => "TEMPLATIN", 'products' => $products]);
    }
    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail', ['title' => "TEMPLATIN", 'product' => $product]);
    }
    public function allproduct()
    {
        $products = Product::all()->sortByDesc('created_at');
        return view('allproduct', ['title' => "TEMPLATIN", 'products' => $products]);
    }
}
