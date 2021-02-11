<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UnitController extends Controller
{
    public function index(){
        return view('back.attach_shop.unit');
    }
    public function insert(Request $req){
       // return $req->new_code;
        $result = validator($req->all(),['new_unit'=>['required','string'],'new_code'=>['required','string']]);
        if($result->fails()){
            Session::flash('mess','adding the new unit have problem ');
            Session::flash('color','bg-danger');
            return back()->withErrors($result);
        }
        Unit::create(['unit_name'=>$req->new_unit,'unit_code'=>$req->new_code]);
        Session::flash('mess','adding the new unit success');
        Session::flash('color','bg-success');

        return  back()->withErrors($result);

    }

    public function inser_edit(Request $req){
        //return $req->all();
        $i = Unit::find($req->id);
        /*---------------------------------------------------------------------------------------------------*/
        //strstr($req->new_unit_edit,"(",true);
        $pos_unit_name_start  = strpos($req->new_unit_edit,'(');
         $unit_name = substr($req->new_unit_edit,0,$pos_unit_name_start); //first input

                                                    /*================*/
        $value = strstr($req->new_unit_edit, "(",); //gets all text from needle on
        $value = strstr($value, ")", true); //gets all text before needle
        $unit_code =  substr($value,1,);

        /*---------------------------------------------------------------------------------------------------*/
        /*$arr = [];
        $result = validator([$req->id,$unit_name,$unit_code],
            [
                $req->id   =>['required','exists:units,id'],
                $unit_name =>['required','string'],
                $unit_code =>['required','string']]);

        if($result->fails()){
            Session::flash('mess','adding the "'.$i['unit_name'].'" have problem to delete ');
            Session::flash('color','bg-danger');
            return dd($result);
            return  redirect()->back()->withErrors($result);
        }*/



        Unit::where('id','=',$req->id)->update(['unit_name'=>$unit_name,'unit_code'=>$unit_code]);

        Session::flash('mess','edit  the "'.$i['unit_name'].'('.$i['unit_code'].')'.'" success');
        Session::flash('color','bg-success');

        return  back();

    }

    public function delete($id){
        //return $id ;
        $i = Unit::find($id)['unit_name'];


        Unit::find($id)->delete();
        Session::flash('mess','Delete the "'.$i.'" success');
        Session::flash('color','bg-success');
        return redirect()->back();

    }
}
