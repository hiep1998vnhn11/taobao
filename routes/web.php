<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductCategoryController;

use App\Http\Controllers\ProductController;
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

Route::get('/', [\App\Http\Controllers\ProductHomeController::class,'show'])->name('/');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [OrderController::class, 'index'])->name('order_by_user');
    Route::get('/checkout', function () {
        return view('checkout');
    });
    Route::post('/addItem', [OrderController::class, 'create'])->name('add_item');
    Route::post('/addToCart',[OrderController::class, 'store'])->name('add_to_cart');
    Route::delete('/deleteItem', [OrderController::class, 'destroy'])->name('del_item');
    Route::post('/updateItem', [OrderController::class, 'update'])->name('update_item');
});

Route::post('/searchItemName', [ProductController::class, 'getItemName'])->name('search_item_name');
Route::get('/product-detail/{id}', 'ProductController@getProduct')->name('product-detail');
Route::get('products/{category_id}',[ProductCategoryController::class, 'show']);
Route::get('/search-product', [ProductController::class, 'searchByName'])->name('search_product');

Route::group(['middleware' => ['auth', 'isadmin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'getAllProducts'])->name('dashboardProducts');
    Route::delete('/dashboard/deleteItem/{id}',[DashboardController::class,'deleteItem'])->name('dashboardDeleteItem');
    Route::get('/history-order', [DashboardController::class, 'getAllOrder'])->name('dashboardOrders');
    Route::get('/addProduct', [ProductController::class, 'showForm'])->name('formNewProduct');
    Route::post('/addProduct', [ProductController::class,'addNewProduct'])->name('addNewProduct');
    Route::get('/fixProduct/{id}',[ProductController::class,'showFixForm'])->name('fixFormProduct');
    Route::post('/fixProduct/{id}', [ProductController::class,'fixProduct'])->name('fixProduct');
    Route::get('/status1/{id}', [DashboardController::class, 'updateStatus1'])->name('updateStatus1');
    Route::get('/status2/{id}', [DashboardController::class, 'updateStatus2'])->name('updateStatus2');
    Route::get('/status3/{id}', [DashboardController::class, 'updateStatus3'])->name('updateStatus3');
});
