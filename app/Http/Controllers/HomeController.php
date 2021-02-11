<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        //return Auth::user()->id;

        if (Auth::check()) {
            if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2) {
                return view('back.start_dash');
            }

            if (Auth::user()->id == 3) {
                return view('front.start');
            }
        }
        return view('front.start');

    }
}