<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function ()
{
	return view('welcome');
});

Route::get('/test', 'TestController@index');
Route::get('/new', 'TestController@create');


Route::group(['prefix' => 'api'], function ()
{
	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('comments', 'CommentController', ['only' => ['index', 'store', 'destroy']]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Facebook Social Login
Route::get('/redirect', 'SocialAuthController@redirect')->name('redirect');
Route::get('/callback', 'SocialAuthController@callback')->name('callback');
