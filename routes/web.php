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


// as => for name routing
// prefix for url 
// namespace = folder name for controller
Route::prefix('admin')->namespace('Admin')->as('admin.')->middleware('auth')->group(function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/news', 'NewsController');
});



