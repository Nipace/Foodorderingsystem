<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
class OrderController extends Controller
{
    public function acceptedOrders()
    {
        $order = Order::where('order_status','accepted')->get();
     
        return view('backend.order.acceptedorders',compact('order'));
    }

    public function rejectedOrders()
    {
        $order = Order::where('order_status','rejected')->get();
     
        return view('backend.order.rejectedorders',compact('order'));
    }

    public function receivedOrders()
    {
        $order = Order::where('order_status','received')->get();
     
        return view('backend.order.receivedorders',compact('order'));
    }

    public function changestatus(Request $request,$id)
    {
        switch ($request->input('action'))
        {
            case 'accept':
                $order = Order::find($id);
                $order->order_status = "accepted";
                $order->save();
                return redirect()->back()->withStatus('Order Accepted');
            break;
            case 'reject':
                $order = Order::find($id);
                $order->order_status = "rejected";
                $order->save();
                return redirect()->back()->with('error-message','Order Rejected');
            break;
           
        }
    }
}
