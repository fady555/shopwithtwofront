<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){

        $products = Product::with(['product_has_many_itm',])->get();

        return view('back.shop.product')->with(['products'=>$products]);
    }

    public function add($process){
        return view('back.shop.product')->with(['process'=>$process]) ;

    }
    public function insert(Request $request){
        //return $request->all();
        $data = $request->all();
        $rules = [
            'product_name'=>['required','string','max:255','unique:products,name'],
            'product_description' =>['required','string',],
            'category_id' => ['numeric','exists:categories,id'],
            'img_product' =>['required'],
        ];

        $result = validator($data,$rules);

        if($result->fails()){return redirect()->back()->withErrors($result);}

        $ximg = $request->file('img_product')->store('img_product_background');
        $product = new Product();
        $product->name = $request->input('product_name') ;
        $product->description = $request->input('product_description') ;
        $product->category_id = $request->input('category_id') ;
        //$request->file('img_product')->store('img_product_background')
        $product->img = json_encode([$ximg]);
        $product->save();

    }

    public function edit($process,$id){

        $product = Product::find($id);

        return view('back.shop.product')->with(['process'=>$process,'product'=>$product]);

    }

    public function insert_edit(Request $request){
        //return $request->all();
        $data = $request->all();
        $rules = [
            'product_name'=>['required','string','max:255','unique:products,name,'.$request->input('id')],
            'product_description' =>['required','string',],
            'category_id' => ['numeric','exists:categories,id'],

        ];

        $result = validator($data,$rules);

        if($result->fails()){return redirect()->back()->withErrors($result);}
        #$ximg = $request->file('img_product')->store('img_product_background');
        $product = Product::find($request->id);

        $product->name =$request->input('product_name') ;
        $product->description =$request->input('product_description')  ;
        $product->category_id =$request->input('category_id') ;
         if(!empty($request->file('img_product'))){
             $rrr = $request->file('img_product')->store('img_product_background');
             $product->img = json_encode([$rrr]);
        }
        $product->save();


        Session::flash('message_edit_product','the  category edit yet');
        return redirect()->route('show_product');



    }
    public function delete($id){
        #return $id;
        Product::find($id)->delete();

        return redirect()->back();
    }
}
