<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAllProducts(){
        $products = Product::paginate(10);
        return view('dashboard.index', ['paginator'=>$products]);
    }
    public function deleteItem($id){
        $deleted = Product::find($id)->delete();
        if($deleted){
            return true;
        }
    }
    public function getAllOrder(){
        $orders = Order::join('users','users.id', '=', 'orders.user_id')->paginate(10);
        return view('dashboard.OrderHistory',['paginator'=>$orders]);
    }
}
