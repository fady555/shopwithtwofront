<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\City;
use App\Http\Controllers\Controller ;


//use App\State;
use Illuminate\Http\Request;

class State extends Controller
{
    public function index()
    {
        $state = \App\State::with(['state_has_many_city'])->get();
        //$city  = City::with('state_has_many_city')->get();
        return view('back.world.state')->with(['states' => $state]);

    }
}
