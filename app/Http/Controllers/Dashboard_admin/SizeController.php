<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use App\Size;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SizeController extends Controller
{
    public function index(){
        return view('back.attach_shop.size');
    }
    public function insert(Request $req){
        //return $req->new_size;
        $result = validator($req->all(),['new_size'=>['required','string']]);
        if($result->fails()){
            Session::flash('mess','adding the new size have problem ');
            Session::flash('color','bg-danger');
            return back()->withErrors($result);
        }
        Size::create(['size'=>$req->new_size]);
        Session::flash('mess','adding the new size success');
        Session::flash('color','bg-success');

        return  back();

    }

    public function inser_edit(Request $req){
        //return $req->all();//{"id":"1","new_size_edit":"extral larege"}
        $i = Size::find($req->id);
        $result = validator($req->all(),['id'=>['required','exists:sizes,id'],'new_size_edit'=>['required','string']]);
        if($result->fails()){
            Session::flash('mess','adding the "'.$i['size'].'" have problem to delete ');
            Session::flash('color','bg-danger');
            return back();
        }

        /*$size = Size::find($req->id);
        $size->size = $req->new_size_edit;
        $size->save();*/

        Size::where('id','=',$req->id)->update(['size'=>$req->new_size_edit]);

        Session::flash('mess','edit  the "'.$i['size'].'" success');
        Session::flash('color','bg-success');

        return  back();

    }

    public function delete($id){
        //return $id ;
        $i = Size::find($id)['size'];


        Size::find($id)->delete();
        Session::flash('mess','Delete the "'.$i.'" success');
        Session::flash('color','bg-success');
        return redirect()->back();

    }
}
