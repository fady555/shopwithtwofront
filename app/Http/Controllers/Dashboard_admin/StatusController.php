<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class StatusController extends Controller
{
    public function index(){
        return view('back.attach_shop.status');
    }
    public function insert(Request $req){
        //return $req->new_status;
        $rule = ['new_status' => ['required','string',],];
        $result = Validator::make($req->all(),$rule);
        if($result->fails()){
            return redirect()->back()->withErrors($result);
        }
        Session::flash('mess','add success');
        Session::flash('color','bg-success');
        Status::create(['status'=>$req->new_status,]);
        return redirect()->back();

    }

    public function inser_edit(Request $req){
        //return $req->id;
        $rule = ['new_status_edit' => ['required','string','unique:statuses,status,'.$req->id],];
        $result = Validator::make($req->all(),$rule);
        if($result->fails()){
            Session::flash('mess','edit faild');
            Session::flash('color','bg-danger');
            return redirect()->back();
        }



        Session::flash('mess','edit success');
        Session::flash('color','bg-success');
        $status = Status::find($req->id);
        $status->status = $req->new_status_edit;
        $status->save();
        return redirect()->back();

    }

    public function delete($id){
       // return $id ;
        Status::find($id)->delete();

        Session::flash('mess','delete success');
        Session::flash('color','bg-success');

        return redirect()->back();

    }

}
