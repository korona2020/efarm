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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*Route::get('address',function () {
    return view('address');
})->name('user.address');

Route::get('address/{id}','AddressController@get')->name('address.get');

Route::post('address','AddressController@store')->name('address.store');

Route::post('addressupdate','AddressController@update')->name('address.update');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');*/

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::post('checkout','PaymentController@createRequest')->name('createPaymentRequest');

//Route::get('redirect/payment/','PaymentController@getAcknowledgement')->name('payment.successful');


Auth::routes();
//done
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::resource('/users','UsersController');
Route::resource('/categories','CategoriesController');
Route::resource('/mngproducts','ProductsManagementController');


Route::get('/','ProductsController@index')->name('home');
Route::get('shop','ProductsController@shop')->name('shop');
Route::get('product/category/{id}','ProductsController@getProductsByCategory')->name('category.products');
Route::get('product/addToCart/{id}','CartController@addToCart')->name('product.addToCart');
Route::get('product/removeFromCart/{id}','CartController@removeFromCart')->name('product.removeFromCart');
Route::get('cart','CartController@getCart')->name('cart');

Route::put('updatecart/{id}','CartController@updateQty')->name('cart.updateqty');

/*

Route::get('product/{id}','ProductController@getSingleProduct')->name('product');

Route::get('product/addToCart/{id}','ProductController@addToCart')->name('product.addToCart');

*/
