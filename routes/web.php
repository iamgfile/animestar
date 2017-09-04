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

//index
Route::get('/', 'Products@index');

//add a new product
Route::get('/products/new', 'Products@new');
Route::post('/products/new', 'Products@create');

//show a individual product
Route::get('/products/{id}', 'Products@show');

//edit a product
Route::get('/products/{id}/edit', 'Products@edit');
Route::patch('/products/{id}/edit', 'Products@update');

//destroy a product
Route::delete('/products/{id}', 'Products@destroy');

