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

Route::get('/', function()
{
    return view('auth/login');
});

Route::resource('admin' ,'adminpanelController');
Route::resource('development' ,'developmentController');
Route::resource('finance' ,'financeController');
Route::resource('sales' ,'salesController');
Route::resource('orders', 'ordersController');

route::get('/invoice', 'financeController@invoice');
route::get('invoice/Check', 'financeController@invoiceCheck');
route::get('developement/finish', 'developmentController@finish');
route::get('/developement/done', 'developmentController@done');
route::get('/invoice/finish', 'financeController@finish');

Auth::routes();

Route::get('/home', 'HomeController@index');