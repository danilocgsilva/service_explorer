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

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes(['confirm' => false]);
Auth::routes([
    'register' => false, 
    'confirm' => false,
    'reset' => false
]);
Route::resource('service', 'ServiceController');
Route::resource('server', 'ServerController');

