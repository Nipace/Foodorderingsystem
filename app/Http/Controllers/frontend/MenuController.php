<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Item;
use App\Model\ItemCategory;
class MenuController extends Controller
{
    public function index(){
        $item = Item::all();
        $navCategory = ItemCategory::where('is_navitem','1')->get();
        $otherCategory = ItemCategory::where('is_navitem','0')->get();
        return view('frontend.menu.fullmenu',compact('item','navCategory','otherCategory'));
    }
    public function categoryView($category){
        $item = Item::where('category',$category)->get();
        $navCategory = ItemCategory::where('is_navitem','1')->get();
        $otherCategory = ItemCategory::where('is_navitem','0')->get();
        return view('frontend.menu.fullmenu',compact('item','navCategory','otherCategory'));
    }

    public function search(Request $request){
        $navCategory = ItemCategory::where('is_navitem','1')->get();
        $otherCategory = ItemCategory::where('is_navitem','0')->get();
        if($request->has('search')){
    		$item = Item::search($request->get('search'))->get();	
    	}else{
    		$item = Item::get();
    	}
        return view('frontend.menu.fullmenu', compact('item','navCategory','otherCategory'));
    }
}
