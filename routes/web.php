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

Route::get('/About', function () {
    return view('about');
});

Route::get('Service', function () {
    return view('service');
});

Route::get('Contact','ContactController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//category
Route::get('Category/All','CategoryController@AllCat')->name('all.category');
//form submit rout in Catagory
Route::post('Category/Add','CategoryController@AddCat')->name('store.category');
//Edit or delet catagory
Route::get('Category/Edit/{id}','CategoryController@Edit');
Route::post('Store/Category/{id}','CategoryController@update');
