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
Route::get('/home', 'ProfilesController@index')->name('home');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/p', 'PostController@create')->name('post.create');
Route::post('/p', 'PostController@store');


