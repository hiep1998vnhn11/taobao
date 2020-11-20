<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function getProduct($id){
        $pro = Product::find($id);
        $listpro = Product::where('category_id',$pro->category_id)->paginate(3);
        return view('product_detail',['product'=>$pro, 'listpro'=>$listpro]);
    }
}
