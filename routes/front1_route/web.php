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


    Route::view('/about-au','front.about_us')->name('about_au');
    Route::view('/contact-au','front.contact_us')->name('contact_au');



    Route::view('/try1','front.about_us');
    Route::view('/try2','front.cart');
    Route::view('/try3','front.checkout');
    Route::view('/try4','front.contact_us');
    Route::view('/try5','front.shop');
    Route::view('/try6','front.start');

    Route::get('999',function (Request  $request){

        //return $_GET['price_filter'];
        //return $request->price_filter;
        //return $request->input('price_filter');


    });

});






