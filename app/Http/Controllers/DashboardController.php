<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAllProducts(){
        return view('dashboard.index');
    }
    public function getAllOrder(){
        return view('dashboard.OrderHistory');
    }
}
