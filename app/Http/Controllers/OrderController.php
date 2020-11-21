<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Symfony\Component\HttpFoundation\Session\Session;

class OrderController extends Controller
{
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $order_sevice = new Order();
        $list_items_ordered = $order_sevice->getOrderById($user_id);
        $total_paid = 0;
        foreach ($list_items_ordered as $item)
            $total_paid = $total_paid + $item->price * $item->number;
        return view('cart', ['items_order'=>$list_items_ordered, 'total_paid' => $total_paid]);
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
            DB::table('products')->where('id', $product->id)->update(['number_in_shop' => $product->number_in_shop-$quality]);
            return redirect()->route('order_by_user');
        }
        else {
            //pop up
            Session::flash('message', 'This is a message!');
            Redirect::back()->with('message', 'message|Record updated.');
        }

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
    public function update(Request $request)
    {
        //
        $request_string = json_decode($request->listItemUpdate);
        $list_item = $request_string;
        $user_id = Auth::user()->id;
        $order_id = DB::table('orders')->where('user_id', $user_id)->get()->get(0)->id;
        foreach ($list_item as $item)
        {
            DB::table('items')
                ->where([['order_id', '=', $order_id],['product_id', '=', $item->id]])
                ->update(['number' => $item->quality]);
        }
        $list_items_ordered = (new Order())->getOrderById($user_id);
        $output = ""; $stt = 0;
        $total = 0;
        if($list_items_ordered) {
            foreach ($list_items_ordered as $item) {
                $delete_button = "<button type='button' class='btn btn-danger' value='Delete' id='item_del' onclick='del_item(.$item->id.)'><span
                                            class='glyphicon glyphicon - remove'></span></button>";
                $output .= "<tr>
                                <td>".$stt."</td>
                                <td><a href='{{ url('/product-detail/$item->id) }}'><img src='$item->image' style='max-height: 100px; max-width: 100px;'></a></td>
                                <td>".$item->name."</td>
                                <td><input type='text' placeholder='$item->number' class='input-mini'></td>
                                <td>".$item->price."</td>
                                <td>".$item->price*$item->number."</td>
                                <td>".$delete_button."</td>
                            </tr>";
                $stt++;
                $total += $item->price*$item->number;
            }
        } else {
            $output = "Hiện tại bạn chưa có món hàng nào. Hãy shopping đi nhé!!!";
        }
        $output_total = "";
        $VAT = $total * 0.1;
        $total_paid = $total + $VAT;
        $output_total .= "<strong>Sub-Total</strong>: ".$total."<br>
                        <strong>VAT (10%)</strong>: ".$VAT."<br>
                        <strong>Total</strong>: ".$total_paid."<br>";
        return response()->json(['list' => $output, 'total' => $output_total]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return
     */
    public function destroy(Request $request)
    {
        //
        $item_id = $request->id;
        $user = Auth::user();
        $order = DB::table('orders')->where('user_id', $user->id)->get();
        $item = new Item();
        $item->deleteItemInOrderUser($order->get(0)->id, $item_id);
        $list_items_ordered = (new Order())->getOrderById($user->id);
        $output = ""; $stt = 0;
        $total = 0;
        if($list_items_ordered) {
            foreach ($list_items_ordered as $item) {
                $delete_button = "<button type='button' class='btn btn-danger' value='Delete' id='item_del' onclick='del_item(.$item->id.)'><span
                                            class='glyphicon glyphicon - remove'></span></button>";
                $output .= "<tr>
                                <td>".$stt."</td>
                                <td><a href='{{ url('/product-detail/$item->id) }}'><img src='$item->image' style='max-height: 100px; max-width: 100px;'></a></td>
                                <td>".$item->name."</td>
                                <td><input type='text' placeholder='$item->number' class='input-mini'></td>
                                <td>".$item->price."</td>
                                <td>".$item->price*$item->number."</td>
                                <td>".$delete_button."</td>";
                $stt++;
                $total += $item->price*$item->number;
            }
        } else {
            $output = "Hiện tại bạn chưa có món hàng nào. Hãy shopping đi nhé!!!";
        }
        $output_total = "";
        $VAT = $total * 0.1;
        $total_paid = $total + $VAT;
        $output_total .= "<strong>Sub-Total</strong>: ".$total."<br>
                        <strong>VAT (10%)</strong>: ".$VAT."<br>
                        <strong>Total</strong>: ".$total_paid."<br>";
        return response()->json(['list' => $output, 'total' => $output_total]);
    }

}
