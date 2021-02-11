<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Category;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index($process = 1  ){
        #return $process;
        $categories = Category::with(['products'])->get();
        #return $categories;
        return view('back.shop.category')->with(['process'=>$process,'categories'=>$categories,]);
    }


    public function edit($process ,$id){
        #return $process.$id;
        $category = Category::find($id);
       return view('back.shop.category')->with(['process'=>$process,'category'=>$category]);

    }

    public function insert_edit(Request $request){
       # return $request->all();
        $data  = $request->all();

        $rules = [
            'category'=>['required','unique:categories,name,','string'],
            'description' =>['required','string'],
        ];
        $message = [
            'category.required'=>"the category name is required ",
            'category.unique'=>"this category didn't effect in database ",
        ];

        $filed = [
            'description'=>'des',
        ];

        $result = validator($data,$rules,$message,$filed);

        if($result->fails() == true){return redirect()->back()->withErrors($result);}

        $category = Category::find($request->id);

        $category->name = $request->category;
        $category->description = $request->description;
        $category->save();

    }


    public function add($add){
        #return $add ;
        return view('back.shop.category')->with(['process'=>$add]);
    }
    public function insert(Request $request){
        #return $request->all();
        # return $request->all();
        $data  = $request->all();

        $rules = [
            'category'=>['required','unique:categories,name,','string'],
            'description' =>['required','string'],
        ];
        $message = [
            'category.required'=>"the category name is required ",
        ];

        $filed = [
            'description'=>'des',
        ];

        $result = validator($data,$rules,$message,$filed);

        if($result->fails() == true){return redirect()->back()->withErrors($result);}


        Category::create([
            'name'=>$request->input('category'),
            'description'=> $request->input('description'),
        ]);
/*
        $x = new Category();
        $x->name = $request->category;
        $x->description = $request->description;
        $x->save();*/





        Session::flash('category_new','the new category add by sucess');
        return redirect()->back();

        //return$request->all();

    }




    public function delete($id){
       # return $id ;
        Category::find($id)->delete();

        Session::flash('category_delete','the  category deleted by sucess');

        return back();

    }





}
