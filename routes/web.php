<?php

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user', 'UserController@select');
Route::put('user','UserController@update');
Route::get('user_password',function(){
    return view('member.password_verify');
});
Route::put('user_password','UserController@password');
Route::get('1',function(){
    return view('test');
});
