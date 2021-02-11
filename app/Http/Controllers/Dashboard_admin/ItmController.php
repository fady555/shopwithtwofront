<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use App\Itm;
use App\Product;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Constraint\Count;


class ItmController extends Controller
{
    public function index(Request $req){

        $dd = $req->all('products')['products'];

        if(empty($req->all('products')['products'])){$itms = Itm::with('itm_belong_to_product')->get();}else{
            $itms = Itm::with('itm_belong_to_product')->whereIn('product_id',$dd)->get();

        }

        //return  var_dump($dd);

       return view('back.shop.itms')->with(['itms' =>$itms,'productSelect'=>$dd]);
    }

    public function indexOne($id = 1){

        //return $id;

        $itm = Itm::find($id);
        return view('back.shop.itm')->with(['itm'=>$itm]);
    }

    public function addItm(){
        return view('back.shop.addItm');
    }
    public function insert(Request $request){

        //return count($request->all('img')['img']);

        //return Auth::user()['id'];
        //return var_dump($request->ratify);
        //return var_dump(json_encode($request->all('status')['status']));
        //return $product = Product::find($request->product_id)->name;
       //return ($request->all('material')['material']);
        /*
       * $request->name_itm
       * $request->description_itm
       * $request->price
       * $request->discount
       * $request->status
       * $request->matrial
       * $request->color
       * $request->unit
       * $request->size
       * $request->number_itm
       * $request->product_id
       * $request->ratify
       * $request->img
       */
        /*========================================validate1============================================*/
        $rules1 = ['name_itm'=>['required','string','max:255',], 'description_itm'=>['required','string'], 'price'=>['required','numeric'], 'discount'=>['required','numeric'],'number_itm'=>['required','numeric'],'product_id'=>['required','numeric']];
        $result1 = validator($request->all(),$rules1);
        if($result1->fails()){return  redirect()->back()->withErrors($result1);}



        $DataInsert = [];
                        /**/
        $DataInsert['name'] =$request->name_itm;
        $DataInsert['description'] =$request->description_itm;
        $DataInsert['price'] =$request->price;
        $DataInsert['discount'] =$request->discount;
        $DataInsert['number_of_itm'] =$request->number_itm;
        $DataInsert['number_of_buy'] = 0;
        $DataInsert['stars'] =0;
        $DataInsert['ratify'] = $request->ratify;
        $DataInsert['product_id'] =$request->product_id;
        $DataInsert['user_id_add'] =Auth::user()['id'];

                      /**/

        if(!is_null($request->all('status')['status'])){
            $DataInsert['status']  = json_encode($request->all('status')['status']);
        }else{$DataInsert['status'] = json_encode([]);}

        if(!is_null($request->all('material')['material'])){
            $DataInsert['made_material']  = json_encode($request->all('material')['material']);
        }else{$DataInsert['made_material'] = json_encode([]);}


        if(!is_null($request->all('color')['color'])){
            $DataInsert['color']  = json_encode($request->all('color')['color']);
        }else{$DataInsert['color'] = json_encode([]);}

        if(!is_null($request->all('unit')['unit'])){
            $DataInsert['unit']  = json_encode($request->all('unit')['unit']);
        }else{$DataInsert['unit'] = json_encode([]);}

        if(!is_null($request->all('size')['size'])){
            $DataInsert['size']  = json_encode($request->all('size')['size']);
        }else{$DataInsert['size'] = json_encode([]);}

                     /**/
        $product = Product::find($request->product_id)->name;
        $arrImg = [];

        //return  $request->all('img')['img'];

        if(!is_null($request->all('img')['img'])){
            $imgCount = count($request->all('img')['img']);

            for($ph = 0 ;$ph < $imgCount ; $ph++){

                $push_hhh = ($request->all('img')['img'][$ph])->store('img_itm_'.$product);
                array_push($arrImg,$push_hhh);
            }

            $DataInsert['img'] = json_encode($arrImg);

        }else{$DataInsert['img'] =json_encode([]) ;}


        //return $request->all('img') ;




        return Itm::create($DataInsert);

        return redirect()->back();
    }

    public function edit($id){
        //return $id ;

        $itm = Itm::find($id);
        return view('back.shop.editItm',['itm'=>$itm]);
    }

    public function insert_edit(Request $request){
        return $request->all();
    }

    ##IMG
    public function edit_img($index_arr,$id_itm){
        //return $index_arr.$id_itm;
        $img_st =  Itm::find($id_itm)->img;
        $img_arr = json_decode($img_st);
    $path = $img_arr[$index_arr];








    }
    public function delete_img($index_arr,$id_itm){
        //return $index_arr.$id_itm;

        //return $index_arr.$id_itm;
        $img_st =  Itm::find($id_itm)->img;
        $img_arr = json_decode($img_st);
        $path = $img_arr[$index_arr];


        //return print_r($img_arr) ;        unset($img_arr[0]);

        //return  "../storage/app".$path;

        if(file_exists("../storage/app/".$path)){
            //return "jgjg";
            #first
            unlink(storage_path('app/'.$path));
            #next
            unset($img_arr[$index_arr]);
            $array_re_range =array_values($img_arr);
            #third
            $itm = Itm::find($id_itm);
            $itm->img = json_encode($array_re_range);
            $itm->save();

            //return json_encode($array_re_range);

            return redirect()->back();



        }


    }

    public function delete_img_all($id_itm){
        //return $id_itm;
       // return json_decode(Itm::find($id_itm)->img)[0];
        //return file_exists("../storage/app/".json_decode(Itm::find($id_itm)->img)[0]);




        for($i=0;$i<count(json_decode(Itm::find($id_itm)->img));$i++){

            if(file_exists("../storage/app/".json_decode(Itm::find($id_itm)->img)[$i])){
                unlink(storage_path('app/'.json_decode(Itm::find($id_itm)->img)[$i]));
            }

        }

        $img = Itm::find($id_itm);
        $img->img = json_encode([]);
        $img->save();

        return redirect()->back();


    }


}
