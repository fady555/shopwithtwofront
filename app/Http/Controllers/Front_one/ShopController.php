<?php

namespace App\Http\Controllers\Front_one;

use App\Http\Controllers\Controller;
use App\Itm;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(Request $request){


        $itms = Itm::paginate(2);

        //echo "<pre>";
       //print_r($itms);
       //echo var_dump($itms->links());
        //echo $itms->total();
        //echo "</pre>";



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



             #QUERY OF SELECT

            //$itms = Itm::whereIn('product_id',$product_arr=$request->products)->get();

            $products_by_category = DB::table('products')->whereIn('category_id',$category_arr)->get('id');

            $products_by_category = json_decode(json_encode($products_by_category)); //it will return you stdclass object
            $products_by_category = json_decode(json_encode($products_by_category),true); //it will return you data

             $products_by_category_array_indexed = [];

             for ($pb = 0 ; $pb < count($products_by_category) ; $pb++){
                 array_push($products_by_category_array_indexed,$products_by_category[$pb]['id']);
             }



             // $products_by_category_array_indexed ;




/*->where(function($query) use($arr_status) {
                    for($m = 0 ; $m < count($arr_status) ; $m++) {
                        $query->orWhereJsonContains('status', $arr_status[$m]);
                    }
                })*/




            $itms = DB::table('itms')
                ->whereIn('product_id',$product_arr)
                ->orWhereIn('product_id',$products_by_category_array_indexed )
                ->paginate(2);






             #END OF QUERY SELECT


            //print_r($product_arr);
            //print_r($products_by_category_array_indexed);
            print_r($arr_status);

           //return $itms;











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
             )->with(['itms'=>$itms]) ;








        }


    }


}
