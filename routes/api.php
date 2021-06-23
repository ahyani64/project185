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

//Route Product
Route::get('barang', 'API\ProductController@index');

Route::get('barang/{id}', 'API\ProductController@show');

//add data
Route::post('barang', 'API\ProductController@store');

//delete data
Route::delete('barang/{id}', 'API\ProductController@destroy');

//Route Category
Route::get('kategori', 'API\CategoriesController@index');
//get one Category
Route::get('kategori/{id}', 'API\CategoriesController@show');

//add Category
Route::post('kategori', 'API\CategoriesController@store');

//delete Category
Route::delete('kategori/{id}', 'API\CategoriesController@destroy');
