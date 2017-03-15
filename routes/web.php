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

Route::get('/home', 'HomeController@index');
Route::get('socket', 'SocketController@index');
Route::post('sendmessage', 'SocketController@sendMessage')->name('sendmessage');
Route::get('writemessage', 'SocketController@writeMessage')->name('writemessage');