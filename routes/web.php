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
Route::get('/', 'Products@index');

#add a new product
Route::get('/products/new', 'Products@new');
Route::post('/products/new', 'Products@create');

#show a individual product
Route::get('/products/{product}', 'Products@show');

#edit a product
Route::get('/products/{product}/edit', 'Products@edit');
Route::post('/products/{product}/edit', 'Products@update'); #isn't this should be patch method?

#destroy a product
Route::delete('/products/{product}', 'Products@destroy');








