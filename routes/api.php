<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', 'ProductController@get');
Route::get('/products/{id}', 'ProductController@getById');
Route::get('/products/{name?}', 'ProductController@getByName');
Route::post('/product', 'ProductController@post');
Route::put('/product/{id}', 'ProductController@put');
Route::delete('/product/{id}', 'ProductController@delete');

Route::post('/e-commerce', 'Api@postE');
Route::get('/e-commerce', 'Api@get');

Route::get('/mahasiswa', 'PageController@mhs');

Route::get('/students', 'StudentsControllers@get');