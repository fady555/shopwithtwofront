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

//Route::get('/home', 'HomeController@index')->name('home');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ]
    ,function (){


    Route::get('/home', 'HomeController@index')->name('home');


});







Route::get('login-as-role',function (){

    return \Illuminate\Support\Facades\Session::get('kind_role_message');
});



Route::get('flush',function (){
    return \Illuminate\Support\Facades\Session::flush();
});
Route::get('55',function (){
    return \Illuminate\Support\Facades\Auth::check();
});


Route::get('55',function (){
    $stack = array("orange", "banana", "apple", "raspberry");

  \

    print_r($stack);
});


Route::get('666',function (){
    //return app()->getLocale();
    return Config::get('app.locale');
});
