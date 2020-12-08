<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function getProduct($id){
        $pro = Product::find($id);
        $listpro = Product::where('category_id',$pro->category_id)->paginate(3);
        return view('product_detail',['product'=>$pro, 'listpro'=>$listpro]);
    }

    //search by name
    public function searchByName(Request $request) {
        $keyword = $request->input('keyword');
        $products = Product::select('name')->where('name', 'LIKE', "%$keyword%")->get();
        return response()->json($products);
    }

    public function getItemName(Request $request){
        $itemNameSearch = $request->input('search_keyword');
        $products = DB::table('products')->where('name', 'LIKE', "%$itemNameSearch%")->take(16)->paginate(8);
        return view('layouts.home', ['paginator'=>$products]);
    }
}
