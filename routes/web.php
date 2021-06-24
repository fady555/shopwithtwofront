<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ]
    ,function (){

    Route::get('/home', 'HomeController@index')->name('home');
});



Route::get('ch',function ($id= 50){

//return url('sql_file/world.sql');
//return \Illuminate\Support\Facades\Session::all();

//print_r($_GET);

//dd(request()->path());
//dd(\Illuminate\Support\Facades\Request::path());
//dd(url()->previous());
//dd(URL::previous());
//dd(URL::current());

    $arr1=[1,2,3]; $arr2=[4,5,3,6];

    $d = array_merge($arr1,$arr2);
    $rr = array_unique($d,2);

    print_r($rr);




})->name('p');











