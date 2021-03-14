<?php

namespace App\Http\Controllers\Front_one;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        return view('front.start');
    }
}
