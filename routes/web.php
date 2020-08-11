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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home'); //data show page (get route)

Route::get('about','PageController@aboutfun')->name('about');

Route::get('/','PageController@homefun')->name('home');

Route::get('contact','PageController@contactfun')->name('contact');

Route::get('simplepost','PageController@postfun')->name('simplepost');
