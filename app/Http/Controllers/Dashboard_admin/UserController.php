<?php

namespace App\Http\Controllers\Dashboard_admin;


use App\Http\Controllers\Controller;
use App\Role;
use App\Country;
use App\State;
use App\City;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        if(Session::has('pag')){
            $pag = Session::get('pag');
        }else{$pag = 10 ;}

        $users = User::with(['user_role',])->paginate($pag);
        #return $users;
        return view('back.user.user')->with(['users'=>$users,'xx'=>""]);

    }

    public function idexpagiate(Request $request){
        #return $request->input('example1_length');
        $ppg= $request->input('example1_length');
        Session::flash('pag',$ppg);
        return redirect()->back();
    }
    public function search(Request $request){
       #return $request->input('search');
        $xx = '%'.$request->input('search').'%';

        if($request->input('search') == ''){
            $xx = '%'."".'%';
        }
        #$xx = '%'.$request->input('search').'%';



        if(Session::has('pag')){
            $pag = Session::get('pag');
        }else{$pag = 10 ;}

        $users = User::where('f_name','like',$xx)->orwhere('l_name','like',$xx)->orwhere('email','like',$xx)->with(['user_role',])->paginate($pag);
        #return $users;
        return view('back.user.user')->with(['users'=>$users,'xx'=>$request->input('search')]);
    }



    public function add(){
        $role =  Role::all();
        $countries = Country::all();
        $states    = State::all();
        $cities    = City::all();

        return view('back.user.add_user')->with(['roles'=>$role,'countries'=>$countries,'states'=>$states,'cities'=>$cities]);
    }

    public function insert(Request $req){




      /*return $req->input('first_name').
              $req->input('last_name').
              $req->input('email').
              $req->input('mobil').
              $req->input('role').
              $req->file('img_user')->store('img_user');*/

        $data = $req->all();

        $rules = [
            'first_name'=>['required', 'string', 'max:255'],
            'last_name'=>['required', 'string', 'max:255'],
            'email'=>['required','email','unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobil'=>['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'role'=>['required','integer','max:3'],
            'img_user'=>['required','file',],
            'city'=>['required','integer',],
        ];
        $result = validator($data,$rules);
        #if($result->fails()==1){
        if($result->fails()){
            return back()->withErrors($result)->withInput();
        }else{
            $x = $req->file('img_user')->store('img_user');
             User::create([
                'f_name' =>$req->input('last_name'),
                'l_name' =>$req->input('last_name'),
                'email' => $req->input('email'),
                'mobil' => $req->input('mobil'),
                'role_id' => $req->input('role'),
                'forget_pass' => "no else pass ",
                'password' => Hash::make($req->input('password')),
                'city_id' =>$req->input('city'),
                'remember_token'=>rand(),
                'img'=>$x
            ]);

            Session::flash('alert-add-user', 'This user is add !');
             return  redirect()->back();
             #return  $req->file('img_user')->store('img_user');
            //img_user/member-lucia.jpg


        }



    }

    public function edit($id){
        $user = User::find($id);
        $cities = City::all();
        return view('back.user.edit')->with(['user'=>$user,'cities'=>$cities]) ;
    }
    public function insert_edit(Request $req){

        #return $req->file('img_user');

        #$input = $req->all();

       #return $req->input('id');

       #return $req->input('f_name');
       #return $req->input('last_name');
       #return $req->input('email');
       #return $req->input('password_old');
       #return $req->input('password_new');
       #return $req->input('password_confirmation_new');
       #return $req->input('mobil');
       #return $req->input('role');
       #return $req->input('img_user');
       #return $req->input('city');


        $oldpass =  User::find($req->input('id'))->password ;

        $inp_oldpass = Hash::check($req->input('password_old'),$oldpass);//return  true or false


        if($inp_oldpass === false ){ Session::flash('alert-password-same','the old password is the not same or not define'); return redirect()->back(); }

        $data = $req->all();

        $rules=[

            'first_name' => ['required','string','max:255','min:4'],
            'last_name' => ['required','string','max:255','min:4'],
            'email' => ['required','email',Rule::unique('users')->ignore($req->input('id'))],
            'password_new' => ['nullable','min:6'],
            'password_confirmation_new' => ['required_with:password_new','same:password_new'],
            'mobil' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10'],
            'role' => ['required','numeric'],
            #'img_user' => [''],
            'city'=>['required','numeric'],
        ];

        $result = validator($data,$rules);

        if ($result->fails() == true){ return back()->withErrors($result)->withInput();}


        if(empty($req->file('img_user'))){
            #return  "no file chossen";

            $user =  User::find($req->input('id'));

            $user->f_name =$req->input('first_name') ;
            $user->l_name =$req->input('last_name') ;
            $user->email  =$req->input('email') ;
            $user->mobil  =$req->input('mobil') ;
            $user->role_id =$req->input('role') ;
            $user->city_id =$req->input('city');
            if(!empty($req->input('password_new'))){$user->password = Hash::make($req->input('password_new')) ;}
            #$user->img    = ;
            $user->updated_at = now();
            $d = $user->save();

            Session::flash('alert-edit-success',' the edit user is success ');
            return  redirect()->back();
            #return  $d ;

        }

        if(!empty($req->file('img_user'))){
            #return  " file chossen";
            $user =  User::find($req->input('id'));

            $user->f_name  =$req->input('first_name') ;
            $user->l_name  =$req->input('last_name') ;
            $user->email   =$req->input('email') ;
            $user->mobil   =$req->input('mobil') ;
            $user->role_id =$req->input('role') ;
            $user->city_id =$req->input('city');
            if(!empty($req->input('password_new'))){$user->password = Hash::make($req->input('password_new')) ;}
            $user->img     = $req->file('img_user')->store('img_user') ;
            $user->updated_at = now();
            $user->save();

            $path = str_replace('public','',url('/'))."storage/app/".$user->img;
            #File::delete($path);

            Session::flash('alert-edit-success',' the edit user is success ');

            return  redirect()->back();

        }

    }






    public function delete($id){


        $user = User::find($id);
        $user->delete();

        /*$user = User::find($id);
        $user->forceDelete()*/

        #Session::put('x','xxxxx',time(5));
        Session::flash('alert-delete-user', 'This user is deleted !');
        return  redirect()->back();

    }


    /*
        public function index(){

        }
        public function add(){

        }
        public function edit(){

        }
        public function delete(){

        }*/
}
