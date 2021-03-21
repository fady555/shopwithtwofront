<?php

namespace App\Http\Controllers\Front_one;

use App\Http\Controllers\Controller;
use App\Itm;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request){


        $itms = Itm::paginate(1);



        if(empty($request->all())){
            return view('front.shop')->with(
                [
                    'category_arr'=>[],
                    'product_arr'=>[],
                    'arr_status'=>[],
                    'min_price' =>2000,
                    'max_price' =>5000,
                    'arr_mater' =>[],
                    'arr_size' =>[],

                ]
            )->with(['itms'=>$itms]);
        }else{
            //return ($request->all());

             if(empty($request->categories)){$category_arr = [];}else{$category_arr=$request->categories;}
             if(empty($request->products)){$product_arr = [];}else{$product_arr=$request->products;}
             if(empty($request->status)){$arr_status = [];}else{$arr_status=$request->status;}
             if(empty($request->materils)){$arr_mater = [];}else{$arr_mater=$request->materils;}
             if(empty($request->sizes)){$arr_size = [];}else{$arr_size = $request->sizes;}


             return view('front.shop')->with(
                 [
                     'category_arr'=>$category_arr,
                     'product_arr'=>$product_arr,
                     'min_price' =>$request->min_price,
                     'max_price' =>$request->max_price,
                     'arr_status'=>$arr_status,
                     'arr_mater'=>$arr_mater,
                     'arr_size'=>$arr_size,
                 ]
             ) ;








        }


    }


}
