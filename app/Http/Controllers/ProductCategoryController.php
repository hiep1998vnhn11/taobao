<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function show($category_id)
    {
        $products = Product::where('category_id', $category_id)->paginate(6);
        $category = Category::findOrFail($category_id);
        return view('products', ['paginator'=>$products, 'category'=>$category]);
    }
}
