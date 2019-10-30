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
    return view('landing-page');
});

Auth::routes();
/*Route::view('/','landing-page');*/
Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');

Route::resource('product', 'ProductsController')->middleware('role:superadministrator|farmer');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/farmer', 'FarmersController@index')->middleware('role:superadministrator|farmer')->name('farmer');
Route::get('/buyer', 'BuyersController@index')->middleware('role:superadministrator|buyer')->name('buyer');
Route::get('/transporter', 'TransportersController@index')->middleware('role:superadministrator|transporter')->name('transporter');

//Route::view('/shop', 'shop');
Route::view('/EachProduct', 'EachProduct');
Route::view('/cart', 'cart');
Route::view('/checkout', 'chekout');
Route::view('/thankyou', 'thankyou');