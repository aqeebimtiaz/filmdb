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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FilmsController@index');
Route::get('/films', 'FilmsController@index');

Route::get('/films/{film}', 'FilmsController@show');
Route::get('/film/create', 'FilmsController@create');

Route::post('/films', 'FilmsController@store');

Route::get('/categories', 'CategoriesController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

