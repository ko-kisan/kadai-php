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

Route::group(['prefix' => 'admin'], function(){
  Route::get('news/create','Admin\NewsController@add');
});

Route::group(['prefix' => 'XXX'], function(){
  Route::get('AAA/bbb','Admin\AAAController@bbb');
});

Route::group(['prefix' => 'admin'], function(){
  Route::get('profile/create',
  'Admin\ProfileController@add');
  Route::get('profile/edit',
  'Admin\ProfileController@edit');
});
