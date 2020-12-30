<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailRequest;
use App\Models\Details;
use App\Models\HasProduct;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Auth::user()->details()->with('hasProduct')->get();
        // return response()->json(['data' => $details]);
        return view('details', ['items_order' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DetailRequest $request)
    {
        $output = "";
        $order = Auth()->user()->order;
        if (!$order) {
            $output .= "<div class='alert alert-error' role='alert'>Đặt hàng thất bại! Bạn chưa từng đặt hàng!</div>";
            return response()->json(['message' => $output]);
        }
        $productCount = Auth::user()->order->items()->count();
        if (!$productCount) {
            $output .= "<div class='alert alert-error' role='alert'>Đặt hàng thất bại! Bạn chưa có sản phẩm nào trong giỏ hàng!</div>";
            return response()->json(['message' => $output]);
        }
        $detail = new Details();
        $detail->user_id = Auth::user()->id;
        $detail->address = $request->address;
        $detail->phone = $request->phone;
        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->message = $request->message;
        $detail->save();
        foreach (Auth::user()->order->items()->cursor() as $item) {
            HasProduct::create([
                'detail_id' => $detail->id,
                'product_id' => $item->product_id,
                'amount' => $item->number
            ]);
        }
        $order->delete();
        $output .= "<div class='alert alert-primary' role='alert'>Đặt hàng thành công! Hãy kiểm tra danh sách đặt hàng của bạn ngay</div>";
        return response()->json(['message' => $output]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Details $order)
    {
        if ($order->user_id !== Auth::user()->id) return redirect('/');
        $details = $order->hasProduct()->paginate(5);
        return view('orderDetail', ['order' => $order, 'details' => $details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
