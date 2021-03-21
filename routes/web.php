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



Route::get('ch',function (){
    //return \App\Category::with('category_has_many_product')->get() ;
   $x = '$75 - $300' ;
   $pos_dash =  strpos($x,'-');


      strpos($x,'-');
      $min_price = substr($x,'1',$pos_dash-1);
      $min_max   =  substr($x,$pos_dash+3);



});











