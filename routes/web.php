<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/api/books', 'APIBookController@index');

Route::get('/test', 'TestController@index');

Route::get('/books', 'BookController@index')->name('books');

Route::get('/books/{id}', 'BookController@show');


Route::get('/eshop', 'EshopController@index');
Route::get('/eshop/category/{category_id}', 'EshopController@category');
Route::get('/eshop/subcategory/{subcategory_id}', 'EshopController@subcategory');


