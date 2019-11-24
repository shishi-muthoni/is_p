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
/*Route::view('/','landing-page');*/
Route::get('/landing-page', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('empty', function() {
    Cart::destroy();
});

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::resource('product', 'ProductsController')->middleware('role:superadministrator|farmer');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/farmer', 'FarmersController@index')->middleware('role:superadministrator|farmer')->name('farmer');
Route::get('/transporter', 'TransportersController@index')->middleware('role:superadministrator|transporter')->name('transporter');

Route::get('/buyer', 'LandingPageController@index')->middleware('role:superadministrator|buyer')->name('landing-page');

//Route::view('/shop', 'shop');
Route::view('/EachProduct', 'EachProduct');
//Route::view('/cart', 'cart');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');
