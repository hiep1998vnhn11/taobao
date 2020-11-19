<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $order_sevice = new Order();
        $list_items_ordered = $order_sevice->getOrderById($user_id);
        return view('cart', ['items_order'=>$list_items_ordered]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $product_service = new Product();
        $user_id = Auth::user()->id;
        $product_id = $request->productId;
        $quality = $request->quality;

        $product = $product_service->findProductById($product_id)->get(0);
        //Check product number before add.
        if($product->number_in_shop - $quality > 0) {
            //Order ok
            $order = new Order();
            $order->user_id = $user_id;
            $order->cost = $product->price * $quality;
            $user_order = $order->findOrderByUserId($user_id)->get(0);
            if($user_order != null) {
                $item = new Item();
                $item->order_id = $user_order->id;
                $item->product_id = $product->id;
                //Can xet truong hop trong gio hang da ton tai mat hang nay
                // Neu da ton tai thi cong them so luong
                $itemOrdered = $item->findItemInOrderUser($user_order, $product)->get(0);
                if($itemOrdered != null) {
                    $slg = $itemOrdered->number + $quality;
                    DB::table('items')
                        ->where([['order_id', '=', $user_order->id],['product_id', '=', $product->id]])
                        ->update(['number' => $slg]);
                } else {
                    // Con neu khong thi chi save
                    $item->number = $quality;
                    $item->save();
                }

            } else {
                //create new order
                $order->save();
                $new_order_id = $order->id;
                //Save items table
                $item = new Item();
                $item->order_id = $new_order_id;
                $item->product_id = $product->id;
                $item->number = $quality;
                $item->save();
            }
            $saveProduct = new Product();
            $saveProduct->number_in_shop = $product->number_in_shop - $quality;
            $saveProduct->update();
        }
        return redirect()->route('product-detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    protected function checkItemInOrder($order, $product) {

    }
}
