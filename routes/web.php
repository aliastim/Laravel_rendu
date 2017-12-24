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
//Route::resource('/blog', 'CommentController');
/*Route::get('/blog', function ()
{
    $post = DB::table('posts')->latest()->get();

    return view('blog.show', compact('posts'));
});*/
Route::resource('/comment', 'CommentController'); //Route pour les méthodes connectées aux commentaires
//Route::get('views/comment/test', 'CommentController@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
