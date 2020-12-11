<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductHomeController extends Controller
{
    public function show()
    {
        $products = Product::orderBy('star','DESC')->paginate(16);
        $user=Auth::user();
        return view('layouts.home', ['paginator'=>$products, 'user_login'=>$user]);
    }
}
