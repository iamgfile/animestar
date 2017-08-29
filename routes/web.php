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
});*/

#index
Route::get('/', 'ProductsController@index');

#add a new product
Route::get('/products/new', 'ProductsController@new');
Route::post('/products/new', 'ProductsController@create');

#show a individual product
Route::get('/products/{product}', 'ProductsController@show');

#edit a product
Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::post('/products/{product}/edit', 'ProductsController@update'); #isn't this should be patch method?

#destroy a product
Route::delete('/products/{product}', 'ProductsController@destroy');








