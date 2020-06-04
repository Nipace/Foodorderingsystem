<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;
use Auth;
use Cart;
use App\Model\ItemCategory;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navCategory = ItemCategory::where('is_navitem','1')->get();
        $otherCategory = ItemCategory::where('is_navitem','0')->get();
        return view('frontend.cart.index',compact('navCategory','otherCategory'));
       
       
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
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->add(array(
            'id' => $request->id,
            'name' =>$request->item_name,
            'price' =>$request->item_price,
            'quantity' => $request->quantity,
            'image'=>$request->image,
            'attributes' => array(),
        ));
          
            
          
     
        // \Cart::add(1,'Steamed Buffo Momo',200,2);
        return redirect()->back()->withStatus(__('Item Added successfully'));
        
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
        $userId = auth()->user()->id; // or any string represents user identifier
        Cart::session($userId)->remove($id);
        return redirect()->back()->withStatus('Item Removed From Cart');
    }
}
