<?php

namespace App\Http\Controllers;

use App\Models\Details;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAllProducts()
    {
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
        return view('dashboard.index', ['paginator' => $products, 'tonkho' => $tonkho, 'da_ban' => $da_ban]);
    }
    public function deleteItem($id)
    {
        Product::find($id)->delete();
    }
    public function getAllOrder()
    {
        //        $orders = Order::join('users','users.id', '=', 'orders.user_id')->paginate(10);
        $orders = Details::with('hasProduct', 'user')->orderBy('created_at')->paginate(10);
        return view('dashboard.OrderHistory', ['paginator' => $orders]);
    }

    public function updateStatus1(Details $order)
    {
        $order->update(['status' => 'Chờ lấy hàng']);
        return redirect()->route('dashboardOrders');
    }

    public function updateStatus2(Details $order)
    {
        $order->update(['status' => 'Đang giao hàng']);
        return redirect()->route('dashboardOrders');
    }

    public function updateStatus3(Details $order)
    {
        $order->update(['status' => 'Hoàn thành']);
        return redirect()->route('dashboardOrders');
    }
}
