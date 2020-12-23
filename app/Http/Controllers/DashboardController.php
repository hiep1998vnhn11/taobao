<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAllProducts(){
        $allpro = Product::all();
        $allItem = Item::all();
        $tonkho = 0;
        $da_ban = 0;

        foreach ($allpro as $product) {
            $tonkho += $product->number_in_shop;
        }
        foreach ($allItem as $item) {
            $da_ban += $item->number;
        }
        $allprice = 
        $products = Product::paginate(10);
        return view('dashboard.index', ['paginator'=>$products, 'tonkho'=>$tonkho, 'da_ban' =>$da_ban]);
    }
    public function deleteItem($id){
        Product::find($id)->delete();
    }
    public function getAllOrder(){
        $orders = Order::join('users','users.id', '=', 'orders.user_id')->paginate(10);
        return view('dashboard.OrderHistory',['paginator'=>$orders]);
    }


}
