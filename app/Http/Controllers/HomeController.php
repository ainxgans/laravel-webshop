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
}
