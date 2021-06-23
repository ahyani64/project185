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

Route::get('/profile', function () {
    return view('profile');
});

//route untuk product
Route::get('product', 'ProductController@index')->name('product.index');
//Route::resource('product', 'ProductController'); 

Route::get('product/add', 'ProductController@add')->name('product.add');
    
Route::post('product/save', 'ProductController@save')->name('product.save');


//route untuk ujian
Route::get('ujian', 'UjianController@index')->name('ujian.index');

Route::get('ujian/add', 'UjianController@add')->name('ujian.add');
    
Route::post('ujian/save', 'UjianController@save')->name('ujian.save');

Route::get('ujian/{id}/destroy', 'UjianController@destroy')->name('ujian.destroy');


Route::get('category', 'CategoryController@index')->name('category.index'); 

//route untuk midsemester
Route::get('mid', 'MidsemesterController@index')->name('mid.index');

Route::get('mid/add', 'MidsemesterController@add')->name('mid.add');
    
Route::post('mid/save', 'MidsemesterController@save')->name('mid.save');

Route::get('/mid/destroy/{id}', 'MidsemesterController@delete');