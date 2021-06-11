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
Route::get('/products/create', 'ProductController@create')->name('products.create')->middleware('auth');
Route::post('/products/store', 'ProductController@store')->name('products.store')->middleware('auth');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit')->middleware('auth');
Route::put('/products/{product}', 'ProductController@update')->name('products.update')->middleware('auth');
Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy')->middleware('auth');

//payments

Route::post('/payments/pay', 'PaymentController@pay')->name('payments.pay');
Route::get('/payments/approval', 'PaymentController@approval')->name('payments.approval');
Route::get('/payments/cancelled', 'Paymentcontroller@cancelled')->name('payments.cancelled');
Route::get('/approval', function () {
    return view('payments.approved');
})->name('approval');
Route::get('/failed', function () {
    return view('payments.failed');
})->name('fail');

//EJEMPLO DE PAGO CON PAYPAL
Route::get('/songs', 'SongsController@index');

//songs 
Route::get('/songs/{payment}', 'SongsController@show')->name('songs');

Route::get('/', 'HomeController@index')->name('home');

//::::::::::::::::::::::::::::::::::: RUTAS GALERIA :::::::::::::::::::::::::::::::::::::::::::

Route::get('/gallery', 'GalleryController@index');

Route::get('/gallery/create', 'GalleryController@create')->name('gallery.create')->middleware('auth');
Route::post('/gallery', 'GalleryController@store')->middleware('auth');
Route::delete('/gallery/{item}', 'GalleryController@destroy')->middleware('auth');

//:::::::::::::::::::::VIDEOS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/videos', 'VideoController@index');
Route::get('/videoslista', 'VideoController@custom');
Route::get('/videos/create', 'VideoController@create')->name('videos.create')->middleware('auth');
Route::post('/videos', 'VideoController@store')->name('videos.store')->middleware('auth');
Route::delete('/videos/{item}', 'VideoController@destroy')->name('videos.destroy')->middleware('auth');

//:::::::::::::::::::::::::::ALBUMS:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('/albums', 'AlbumController@index');
Route::get('/alabanzas', 'AlbumController@religious');
Route::get('/albums/create', 'AlbumController@create')->name('albums.create')->middleware('auth');
Route::post('/albums', 'AlbumController@store')->name('albums.store')->middleware('auth');
Route::delete('/albums/{item}', 'AlbumController@destroy')->name('albums.destroy')->middleware('auth');

Route::post('/contact-us', 'ContactController@sendContact');

Auth::routes();
