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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/estoque', 'ProductController@index')->name('estoque');
Route::post('/estoque', 'ProductController@store')->name('estoque');


Route::get('/categoria-produtos', 'ProductCategoryController@index')->name('categoria-produtos');
Route::post('/categoria-produtos', 'ProductCategoryController@store')->name('categoria-produtos');
