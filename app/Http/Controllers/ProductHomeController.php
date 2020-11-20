<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductHomeController extends Controller
{
    public function show()
    {
        $products = Product::orderBy('star','DESC')->take(16)->paginate(8);
        return view('layouts.home', ['paginator'=>$products]);
    }
}
