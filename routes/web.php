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
return redirect('/home');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin','back\adminController');

Route::resource('/posts','back\postsController');

Route::resource('/posts','back\postsController');


Route::resource('/category','back\categoryController');


Route::resource('/tag','back\tagController');


Route::resource('/blog','front\blogController');
Route::resource('/contact','front\contactController');
Route::resource('/categ','front\categController');
Route::resource('/role', 'back\roleController');
Route::resource('/permission', 'back\permissionsController');



