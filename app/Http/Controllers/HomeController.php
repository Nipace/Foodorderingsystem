<?php

namespace App\Http\Controllers;
use App\Model\Order;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $order = Order::where('order_status','received')->get();
       
        return view('backend.dashboard',compact('order'));
    }
}
