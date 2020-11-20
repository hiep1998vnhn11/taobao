<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductHomeController extends Controller
{
    public function show()
    {
        $products = Product::where('star','>=', 4)->paginate(6);
        return view('layouts.home', ['paginator'=>$products]);
    }
}
