<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tes', function () {
    return 'Hello';
});

Route::get('password', function(){
    return bcrypt('hikigaya25');
});

//------praktikum-------//
//Route Product
Route::get('barang', 'API\ProductController@index');
//get one product
Route::get('barang/{id}', 'API\ProductController@show');
//add data
Route::post('barang', 'API\ProductController@store');
//delete data
Route::delete('barang/{id}', 'API\ProductController@destroy');
//update data
Route::patch('barang/{id}', 'API\ProductController@update');
//Route Category
Route::get('category', 'API\CategoriesController@index');
//get one Category
Route::get('category/{id}', 'API\CategoriesController@show');
//add Category
Route::post('category', 'API\CategoriesController@store');
//delete Category
Route::delete('category/{id}', 'API\CategoriesController@destroy');
//update Category
Route::patch('category/{id}', 'API\CategoriesController@update');
//------praktikum-------//

//--------Bagian UAS Web Service//
//------------------------------//
//Route for Pariwisata
//get Pariwisata
Route::get('pariwisata', 'API\PariwisataController@index');
//get one Pariwisata
Route::get('pariwisata/{id}', 'API\PariwisataController@show');
//add Pariwisata
Route::post('pariwisata', 'API\PariwisataController@store');
//delete Pariwisata
Route::delete('pariwisata/{id}', 'API\PariwisataController@destroy');
//update Pariwisata
Route::patch('pariwisata/{id}', 'API\PariwisataController@update');

//Route for Kategori
//get Kategori
Route::get('kategori', 'API\KategoriController@index');
//get one Kategori
Route::get('kategori/{id}', 'API\KategoriController@show');
//add Kategori
Route::post('kategori', 'API\KategoriController@store');
//delete Kategori
Route::delete('kategori/{id}', 'API\KategoriController@destroy');
//update Kategori
Route::patch('kategori/{id}', 'API\KategoriController@update');

//Route for Booking
//get Booking
Route::get('booking', 'API\BookingController@index');
//get one Booking
Route::get('booking/{id}', 'API\BookingController@show');
//add Booking
Route::post('booking', 'API\BookingController@store');
//delete Booking
Route::delete('booking/{id}', 'API\BookingController@destroy');
//update Booking
Route::patch('booking/{id}', 'API\BookingController@update');

//Route for Customer
//get Customer
Route::get('customer', 'API\CustomerController@index');
//get one Customer
Route::get('customer/{id}', 'API\CustomerController@show');
//add Customer
Route::post('customer', 'API\CustomerController@store');
//delete Customer
Route::delete('customer/{id}', 'API\CustomerController@destroy');
//update Customer
Route::patch('customer/{id}', 'API\CustomerController@update');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('wajib', 'AuthController@wajib');

});
