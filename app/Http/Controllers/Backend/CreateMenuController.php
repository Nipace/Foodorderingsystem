<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ItemCategory;
use App\Model\Item;
use Illuminate\Support\Str;
use Image;
class CreateMenuController extends Controller
{

    public function item()
    {
        $item = Item::paginate(4);
        return view ('backend.menu.item',compact('item'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Item::paginate(10);
        return view('backend.menu.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=ItemCategory::all();
        return view('backend.menu.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->item_price = $request->item_price;
        $item->description = $request->description;

        $image = $request->file('image');
        if (!is_dir(public_path('/photos'))) {
            mkdir(public_path('/photos'), 0777);}
            $name = sha1(date('YmdHis') . Str::random(30));
            $save_name = $name . '.' . $image->getClientOriginalExtension();
            $resize_name = $name . Str::random(2) . '.' . $image->getClientOriginalExtension();
         
            Image::make($image)
                        ->resize(1300, 864)
                        ->save(public_path('/photos') . '/' . $resize_name);
        $item->image = $resize_name;
        $item->save();
      
            
        return redirect(route('menu.item'))->withStatus('Item added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $item = Item::find($id);
       return view('backend.menu.view',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $category = ItemCategory::all();
        return view('backend.menu.edit',compact('item','category'));
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
        $item = Item::find($id);
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->item_price = $request->item_price;
        $item->description = $request->description;

        $image = $request->file('image');
        if($image){
        if (!is_dir(public_path('/photos'))) {
            mkdir(public_path('/photos'), 0777);}
            $name = sha1(date('YmdHis') . Str::random(30));
            $save_name = $name . '.' . $image->getClientOriginalExtension();
            $resize_name = $name . Str::random(2) . '.' . $image->getClientOriginalExtension();
         
            Image::make($image)
                        ->resize(1300, 864)
                        ->save(public_path('/photos') . '/' . $resize_name);
        $item->image = $resize_name;
        }
        $item->save();
      
            
        return redirect(route('createmenu.edit',$id))->withStatus('Item added sucessfully');
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
