<?php

namespace App\Http\Controllers\Front_one;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request){


        if(empty($request->all())){
            return view('front.shop')->with(['category_arr'=>[],'product_arr'=>[]]);
        }else{
            //return ($request->all());

             if(empty($request->categories)){$category_arr = [];}else{$category_arr=$request->categories;}
             if(empty($request->products)){$product_arr = [];}else{$product_arr=$request->products;}

             return view('front.shop')->with(['category_arr'=>$category_arr,'product_arr'=>$product_arr]) ;


            //return redirect()->back()->withoutFragment();
        }


    }

}
