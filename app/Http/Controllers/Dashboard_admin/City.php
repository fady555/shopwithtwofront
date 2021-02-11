<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class City extends Controller
{
    public function index(){
        $city = \App\City::get();

        return view('back.world.city')->with(['cities'=>$city]);
    }
}
