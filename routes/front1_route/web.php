<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_admin\UserController;
use App\Http\Controllers\Dashboard_admin\CategoryController;
use Illuminate\Http\Request;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ]
    ,function (){

    #views
    Route::view('/about-us','front.about_us')->name('about_us');
    Route::view('/contact-us','front.contact_us')->name('contact_us');
    #controllers
    Route::get('/home-product','StartController@index')->name('start_home');
    Route::get('/shop','ShopController@index')->name('shop');
    Route::get('/part_shop','ShopController@part_index');





    /*Route::view('/try1','front.about_us');
    Route::view('/try2','front.cart');
    Route::view('/try3','front.checkout');
    Route::view('/try4','front.contact_us');
    Route::view('/try5','front.shop');
    Route::view('/try6','front.start');*/



        Route::view('shop2','front.shop2');


});






