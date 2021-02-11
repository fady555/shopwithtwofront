<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use App\material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MaterialController extends Controller
{
    public function index(){
        return view('back.attach_shop.material');
    }
    public function insert(Request $req){
        //return $req->new_material;
        $result = validator($req->all(),['new_material'=>['required','string']]);
        if($result->fails()){
            Session::flash('mess','adding the new material have problem ');
            Session::flash('color','bg-danger');
            return back()->withErrors($result);
        }
        Material::create(['mater_name'=>$req->new_material]);
        Session::flash('mess','adding the new material success');
        Session::flash('color','bg-success');

        return  back();

    }

    public function inser_edit(Request $req){
        //return $req->all();//{"id":"1","new_material_edit":"extral larege"}
        $i = Material::find($req->id);
        $result = validator($req->all(),['id'=>['required','exists:materials,id'],'new_material_edit'=>['required','string']]);
        if($result->fails()){
            Session::flash('mess','adding the "'.$i['mater_name'].'" have problem to delete ');
            Session::flash('color','bg-danger');
            return back();
        }

        /*$material = $material::find($req->id);
        $material->mater_name = $req->new_material_edit;
        $material->save();*/

        Material::where('id','=',$req->id)->update(['mater_name'=>$req->new_material_edit]);

        Session::flash('mess','edit  the "'.$i['mater_name'].'" success');
        Session::flash('color','bg-success');

        return  back();

    }

    public function delete($id){
        //return $id ;
        $i = Material::find($id)['mater_name'];


        Material::find($id)->delete();
        Session::flash('mess','Delete the "'.$i.'" success');
        Session::flash('color','bg-success');
        return redirect()->back();

    }
}
