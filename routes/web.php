<?php

use App\Http\Controllers\PageController;
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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/mahasiswa', 'PageController@mahasiswa');

Route::get('/students', 'StudentsControllers@index');
Route::post('/students', 'StudentsControllers@store');
Route::get('/students/create', 'StudentsControllers@create');
Route::get('/students/{student}', 'StudentsControllers@show');
Route::delete('/students/{student}', 'StudentsControllers@destroy');
Route::get('/students/{student}/edit', 'StudentsControllers@edit');
Route::patch('/students/{student}', 'StudentsControllers@update');
//routee
// Route::resource('students', 'StudentsControllers');