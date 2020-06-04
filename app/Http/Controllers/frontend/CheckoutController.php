<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ItemCategory;
use Carbon\Carbon;
use Cart;
use App\Model\Order;
use App\User;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($service)
    {
        // $dt = new Carbon();
        // $dt->timezone('Asia/Kathmandu');
        // echo $dt->hour;
        $navCategory = ItemCategory::where('is_navitem','1')->get();
        $otherCategory = ItemCategory::where('is_navitem','0')->get();
        return view('frontend.checkout.index',compact('navCategory','otherCategory','service'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$service)
    {
       $content = Cart::session(auth()->user()->id)->getContent(); 
       foreach($content as $items){
           $order = new Order;
           $order->item_id = $items->id;
           $order->item_name = $items->name;
           $order->price = $items->price;
           $order->quantity = $items->quantity;
           $order->user_id = auth()->user()->id;
           $order->service_type = $service;
           $order->delivery_address = $request->address; 
           $order->time = $request->time;
           $order->order_status = "received";
           $order->payment_status = $request->payment;
           $order->save();     
       }
       Cart::clear();
       return redirect(route('menu.view'))->withStatus('Added');
        //  $starttime = $request->time;
        //  $dt = new Carbon();
        //  $dt->timezone('Asia/Kathmandu');
        //  $hour = $dt->hour;
        // if($starttime >= $hour){
            
        //    return redirect()->back()->withStatus('Added');
        // }
        // else{
        //    return redirect()->back()->withStatus('The picked time exceeds current time please slecect suitable time');
        // }
       
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
