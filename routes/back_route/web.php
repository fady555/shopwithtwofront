<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_admin\UserController;
use App\Http\Controllers\Dashboard_admin\CategoryController;
use Illuminate\Http\Request;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
    ],

    #->middleware('admin);
    #->middleware('admin_helper');
    #->middleware('both_admin');
    #->to_admin
    function(){

        #user
        Route::view('/dashboard','back.start_dash');
        Route::get('/show-user','UserController@index')->name('show_user')->middleware('both_admin');
        Route::get('/show-user-pag','UserController@idexpagiate')->name('show_user_pag')->middleware('both_admin');
        Route::get('/show-user-search','UserController@search')->name('show_user_search')->middleware('both_admin');
        Route::get('/add-user','UserController@add')->name('add_user')->middleware('both_admin');
        Route::post('/insert-user','UserController@insert')->name('insert_user')->middleware('admin');
        Route::get('/edit-user/{id?}','UserController@edit')->name('edit_user')->middleware('both_admin');
        Route::post('/insert-edit','UserController@insert_edit')->name('insert_edit')->middleware('admin');
        Route::delete('/delete-user/{id}','UserController@delete')->name('delete_user')->middleware('admin');

    });




Route::group(
    [
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth'],
    ]
    ,function (){


    #category

    Route::get('/show-category/{process?}','CategoryController@index')->name('show_category')->middleware('both_admin');

    Route::get('/add-category/{add?}','CategoryController@add')->name('add_category')->middleware('both_admin');
    Route::get('/insert-category','CategoryController@insert')->name('insert_category')->middleware('admin');

    Route::get('/edit-category/{process?}/{id?}','CategoryController@edit')->name('edit_category')->middleware('both_admin');
    Route::get('/edit-insert-category','CategoryController@insert_edit')->name('edit_insert_category')->middleware('admin');

    Route::get('/delete-category/{id?}','CategoryController@delete')->name('delete_category')->middleware('admin');

    #product
    Route::get('/show-product/{process?}','ProductController@index')->name('show_product')->middleware('both_admin');

    Route::get('/add-product/{process?}','ProductController@add')->name('add_product')->middleware('both_admin');
    Route::post('/insert-product','ProductController@insert')->name('insert_product')->middleware('admin');

    Route::get('/edit-product/{process?}/{id?}','ProductController@edit')->name('edit_product')->middleware('both_admin');
    Route::post('/edit-insert-product','ProductController@insert_edit')->name('edit_insert_product')->middleware('admin');

    Route::get('/delete-product/{id?}','ProductController@delete')->name('delete_product')->middleware('admin');


    #itm
    Route::get('/show-itms/','ItmController@index')->name('show_itms')->middleware('both_admin');
    Route::get('/show-itm/{id?}/','ItmController@indexOne')->name('show_itm')->middleware('both_admin');

    Route::get('/add-itm/','ItmController@addItm')->name('add_itm')->middleware('both_admin');

    Route::post('/insert-itm','ItmController@insert')->name('insert_itm')->middleware('both_admin');

    Route::get('/edit-itm/{id?}','ItmController@edit')->name('edit_itm')->middleware('both_admin');
    Route::post('/edit-insert-itm','ItmController@insert_edit')->name('edit_insert_itm')->middleware('both_admin');

    Route::get('/delete-itm/{id?}','ItmController@delete')->name('delete_itm')->middleware('both_admin');

    #img Itm
        Route::get('edit_itm_img/{index_arr?}/{id_itm?}','ItmController@edit_img')->name('edit_img')->middleware('both_admin');
        Route::get('delete_itm_img/{index_arr?}/{id_itm?}','ItmController@delete_img')->name('delete_img')->middleware('both_admin');
        Route::get('delete_all_img_itm/{id_itm?}','ItmController@delete_img_all')->middleware('both_admin');
    /*********************************/


});








Route::group(
    [
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','both_admin']
    ]
    ,function (){


    //country

    Route::get('/show-country','Country@index')->name('show_country');


    //state

    Route::get('/show-state','State@index')->name('show_state');

    //City

    Route::get('/show-city','city@index')->name('show_city');


});


//attach_shop



Route::group(
    [
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth','both_admin']
    ]
    ,function (){


    /*status*/
    Route::get('/show-status','StatusController@index')->name('show_status');
    Route::get('/add-status','StatusController@insert')->name('insert_status');
    Route::get('/insert-edit-status','StatusController@inser_edit')->name('insert_edit_status');
    Route::get('/delete-status/{id?}','StatusController@delete')->name('delete_status');

    /*size*/
    Route::get('/show-size','SizeController@index')->name('show_size');
    Route::get('/add-size','SizeController@insert')->name('insert_size');
    Route::get('/insert-edit-size','SizeController@inser_edit')->name('insert_edit_size');
    Route::get('/delete-size/{id?}','SizeController@delete')->name('delete_size');
    /*unit*/
    Route::get('/show-unit','UnitController@index')->name('show_unit');
    Route::get('/add-unit','UnitController@insert')->name('insert_unit');
    Route::get('/insert-edit-unit','UnitController@inser_edit')->name('insert_edit_unit');
    Route::get('/delete-unit/{id?}','UnitController@delete')->name('delete_unit');
    /*material*/
    Route::get('/show-material','MaterialController@index')->name('show_material');
    Route::get('/add-material','MaterialController@insert')->name('insert_material');
    Route::get('/insert-edit-material','MaterialController@inser_edit')->name('insert_edit_material');
    Route::get('/delete-material/{id?}','MaterialController@delete')->name('delete_material');

});

















