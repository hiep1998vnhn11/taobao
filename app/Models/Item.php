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
}
