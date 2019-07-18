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
*///login code
Route::get('/', 'italentController@login');
Route::post('match', 'italentController@run');
//order code
//Route::get('order', 'italentController@order_view');
//logout code
Route::get ( 'logout', 'italentController@logout' );
//
Route::get('order', 'italentController@order');

Route::post('send', 'italentController@save');


//users view code here..
Route::get('tableview', 'italentController@viewform');
Route::get('tableview', 'italentController@data');


//genarate report

//Route::get('report', 'italentController@data');


//charts
//Route::get('report', 'italentController@chartjs');

Route::get('report','StockController@index');
Route::get('report','StockController@chart');

Route::get('/', function () {
    return view('emplogin');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
