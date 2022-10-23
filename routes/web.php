<?php

use Illuminate\Support\Facades\Route;
use App\Bu;
/*
admin route

*/
Route::group(['middleware'=>['web','admin']],function(){
    Route::get('/adminpanel', 'Admincontroller@index');
    Route::get('/adminpanel/users', 'UsersController@index');
    Route::get('/adminpanel/users/create', 'UsersController@create');
    Route::POST('/adminpanel/users/store', 'UsersController@store');
    Route::get('/adminpanel/users/edit', 'UsersController@edit');
    Route::get('/adminpanel/users/update', 'UsersController@update');
    Route::get('/adminpanel/users/delete', 'UsersController@delete');
    Route::get('/adminpanel/sitesetting', 'SiteSettingController@index');
    Route::get('/adminpanel/sitesetting/manage', 'SiteSettingController@store');
    Route::get('/adminpanel/bu', 'BuController@index');
    Route::get('/adminpanel/bu/create', 'BuController@create');
    Route::post('/adminpanel/bu/store', 'BuController@store');
    Route::get('/adminpanel/bu/edit', 'BuController@edit');
    Route::get('/adminpanel/bu/update', 'BuController@update');
    Route::get('/adminpanel/bu/delete', 'BuController@delete');
    Route::get('/showall', 'BuController@showall');
    Route::get('/villa', 'BuController@showvilla');
    Route::get('/flat', 'BuController@showflat');
    Route::get('/forrent', 'BuController@showforrent');
    Route::get('/ownership', 'BuController@showownership');
    Route::get('/free', 'BuController@showfree');
    Route::get('/busy', 'BuController@showbusy');
    Route::get('/search', 'BuController@search');
    Route::get('/singlebu/{id}', 'BuController@siglebu');

});


Route::get('/', function () {
    $bu=Bu::all();
    return view('home',["bu"=>$bu]);
});


Auth::routes();


Route::get('/home', 'HomeController@index');
//->middleware('auth')
