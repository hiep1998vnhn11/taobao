<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{

    public $timestamps = false;
    /**
     * The attributes on items tables
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'number'
    ];

    public function findItemInOrderUser($user_order, $product)
    {
        return DB::table('items')
            ->where([['order_id', '=', $user_order->id],['product_id', '=', $product->id]])->get();
    }

    public function deleteItemInOrderUser($order_id, $product_id) {
        $product = DB::table('products')->where('id', $product_id)->first()->number_in_shop;
        $number = DB::table('items')->where([['order_id', '=', $order_id],['product_id', '=', $product_id]])->first()->number;
        $value = $product + $number;
        DB::table('items')
            ->where([['order_id', '=', $order_id],['product_id', '=', $product_id]])->delete();
        //update number_in_shop

        return DB::table('products')
            ->where('id', $product_id)->update(['number_in_shop' => $value]);
    }

    public function updateItem($item){
        return DB::table('items')
            ->where([['order_id', '=', $item->order_id],['product_id', '=', $item->product_id]])
            ->update(['number' => $item->number]);
    }
}
