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


/*Route::get('/', function () {
    return view('welcome');
});*/ //ESTA PARTE LA CAMBIE AL HOMECONTROLLER


// products in dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/products/{product}', 'ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');

//payments

Route::post('/payments/pay', 'PaymentController@pay')->name('payments.pay');
Route::get('/payments/approval', 'PaymentController@approval')->name('payments.approval');
Route::get('/payments/cancelled', 'Paymentcontroller@cancelled')->name('payments.cancelled');

//EJEMPLO DE PAGO CON PAYPAL
Route::get('/songs', 'SongsController@index');

//songs 
Route::get('/songs/{payment}', 'SongsController@show')->name('songs');

Route::get('/', 'HomeController@index')->name('home');

// RUTAS GALERIA 

Route::get('/gallery', 'GalleryController@index');

Route::get('/gallery/create', 'GalleryController@create')->middleware('auth');
Route::post('/gallery', 'GalleryController@store')->middleware('auth');

Route::get('/videos', 'VideoController@index');

Route::post('/contact-us', 'ContactController@sendContact');

Auth::routes();
