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
    return view('homepage');
});

Route::get('/homepage','HomepageController@index')->name('homepage');
Route::get('/guestbook','CommentsController@index')->name('guestbook');
Route::get('/contact','HomepageController@contact')->name('contact');
Route::get('/gallery','HomepageController@gallery')->name('gallery');
Route::get('/roulette','HomepageController@roulette')->name('roulette');
Route::post('/guestbook','CommentsController@store')->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delete/{id}', 'CommentsController@destroy')->name('delete');
Route::get('/edit/{id}', 'CommentsController@edit')->name('edit');
Route::put('{id}', 'CommentsController@update')->name('update');
Route::post('/storerewards','RouletteController@store')->name('storerewards');

