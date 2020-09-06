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
Route::group(['prefix' => 'admin'], function(){
Route::get('book/create', 'Admin\Bookcontroller@add')->middleware('auth');
Route::post('book/create', 'Admin\Bookcontroller@create')->middleware('auth');

Route::get('book/test', 'TestController@add');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
