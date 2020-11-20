<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCategoryController;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
})->name('/');
Auth::routes();

Route::get('/cart',[OrderController::class, 'index'])->name('order_by_user');

Route::get('/product-detail', function (){
    return view('product_detail');
});

Route::get('/products', function (){
    return view('products');
});

Route::get('products/{category_id}',[ProductCategoryController::class, 'show']);

Route::get('/checkout', function(){
    return view('checkout');
});

