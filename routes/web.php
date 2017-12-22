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

Route::get('/', 'Welcomecontroller@Welcome'); //on passe le controller et on appelle la méthode qu'on n'utilise
Route::get('/mes-articles', 'UserController@articles');
Route::resource('/blog', 'BlogController'); //lorsqu'on a plusieurs méthodes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
