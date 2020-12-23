<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function showForm(){
        return view('dashboard.add_product');
    }

    public function showFixForm($id){
        $product = Product::find($id);
        return view('dashboard.fix_product',['item'=>$product]);
    }

    public function fixProduct($id, Request $request){
        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->link = $request->link;
        $product->description = $request->description;
        $product->number_in_shop = $request->number;
        $product->brand = $request->brand;
        $product->category_id = $request->category;
        if($request->hasFile('product_image')){
            $file = $request->product_image;
            $file->move('images', $file->getClientOriginalName());
            $product->image = $file->getClientOriginalName();
        }
        $product->save();
        return redirect('/fixProduct/'.$id);
    }

    public function addNewProduct(Request $request){
        $new_product = new Product();

        if($request->hasFile('product_image')){
            $file = $request->product_image;
            $file->move('images', $file->getClientOriginalName());
            $new_product->image = $file->getClientOriginalName();
        }
        else {
            $new_product->image = "default.jpg";
        }
//        if($request->hasFile('product_image2')){
//            $file = $request->product_image2;
//            $file->move('images', $file->getClientOriginalName());
//            $new_product->image = $file->getClientOriginalName();
//        }
//        else {
//            $new_product->image = "default.jpg";
//        }
        $new_product->number_in_shop = $request->number;
        $new_product->name = $request->product_name;
        $new_product->description = $request->description;
        $new_product->link = $request->link;
        $new_product->price = $request->price;
        $new_product->brand = $request->brand;
        $new_product->star = 0;
        $new_product->category_id = $request->category;

        $new_product->save();
        return redirect()->route('dashboardProducts');
    }

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
