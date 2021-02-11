<?php

namespace App\Http\Controllers\Dashboard_admin;

use App\Http\Controllers\Controller ;


use App\State;
use Illuminate\Http\Request;

class Country extends Controller
{
    public function index()
    {
        $countries = \App\Country::with(['country_has_many_states'])->get();
        $state = State::with('state_has_many_city')->get();
        return view('back.world.country')->with(['countries' => $countries])->with(['state' => $state]);

    }
}
