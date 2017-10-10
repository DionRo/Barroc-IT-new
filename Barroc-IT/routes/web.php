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

route::get('/', function (){
    return view('welcome');
});

Route::resource('admin' ,'adminpanelController');
Route::resource('companies' ,'companiesController');
Route::resource('finance' ,'financeController');
Route::resource('sales' ,'saleController');
Route::resource('orders', 'orderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
