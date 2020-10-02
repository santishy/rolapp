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
// products in dashboard
Route::get('/products/create','ProductController@create')->name('products.create');
Route::post('/products/store','ProductController@store')->name('products.store');
Route::get('/products','ProductController@index')->name('products.index');
Route::get('/products/{product}/edit','ProductController@edit')->name('products.edit');
Route::put('/products/{product}','ProductController@update')->name('products.update');
Route::delete('/products/{product}','ProductController@destroy')->name('products.destroy');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
