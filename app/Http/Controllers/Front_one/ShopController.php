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

        $itms = Itm::paginate(10);

        if(empty($request->all())){
            return view('front.shop')->with(
                [
                    'category_arr'=>[],
                    'product_arr'=>[],
                    'arr_status'=>[],
                    'min_price' =>0,
                    'max_price' =>1000000,
                    'arr_mater' =>[],
                    'arr_size' =>[],

                ]
            )->with(['itms'=>$itms]);
        }else{
            //return ($request->all());

             if(empty($request->categories)){$category_arr = [];}else{$category_arr=$request->categories;}
             if(empty($request->products)){$product_arr = [];}else{$product_arr=$request->products;}
             if(empty($request->status)){$arr_status = [];}else{$arr_status=$request->status; foreach ($arr_status AS $index => $value){$arr_status[$index] = (int)$value;}}
             if(empty($request->materils)){$arr_mater = [];}else{$arr_mater=$request->materils;foreach ($arr_mater AS $index => $value){$arr_mater[$index] = (int)$value;}}
             if(empty($request->sizes)){$arr_size = [];}else{$arr_size = $request->sizes;foreach ($arr_size AS $index => $value){$arr_size[$index] = (int)$value;}}

             if(empty($request->min_price)){$min_price = 0;}else{$min_price = $request->min_price;}
             if(empty($request->max_price)){$max_price = 100000000;}else{$max_price = $request->max_price;}



             #QUERY OF SELECT
            $products_by_category = DB::table('products')->whereIn('category_id',$category_arr)->get('id');

            $products_by_category = json_decode(json_encode($products_by_category)); //it will return you stdclass object
            $products_by_category = json_decode(json_encode($products_by_category),true); //it will return you data

             $products_by_category_array_indexed = [];

             for ($pb = 0 ; $pb < count($products_by_category) ; $pb++){
                 array_push($products_by_category_array_indexed,$products_by_category[$pb]['id']);
             }

            $array_end_products_merge = array_merge($products_by_category_array_indexed,$arr_status);


                    if(empty($array_end_products_merge)):
                        $itms_first_query = DB::table('itms')
                            ->WhereJsonContains('status',$arr_status)
                            ->WhereJsonContains('made_material',$arr_mater)
                            ->WhereJsonContains('size',$arr_size)
                            ->where('discount','>',$min_price)//min_value
                            ->where('discount','<=',$max_price);//max_value
                        $itms = $itms_first_query->whereJsonContains('status',$arr_status)->paginate(10);


                        else:
                            $itms_first_query = DB::table('itms')
                                ->WhereJsonContains('status',$arr_status)
                                ->WhereJsonContains('made_material',$arr_mater)
                                ->WhereJsonContains('size',$arr_size)
                                ->where('discount','>',$min_price)//min_value
                                ->where('discount','<=',$max_price)//max_value
                                ->whereIn('product_id',$array_end_products_merge);
                          $itms = $itms_first_query->whereJsonContains('status',$arr_status)->paginate(10);
                    endif;





             #END OF QUERY SELECT



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
