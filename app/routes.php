<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/register', function()
{
	$user = new User;
	$user->email = Input::get('email');
	$user->username = Input::get('username');
	$user->password = Hash::make(Input::get('password'));
	$user->save();
	$theEmail = Input::get('email');
	return View::make('thanks')->with('theEmail', $theEmail);
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/login', function()
{
	$credentials = Input::only('username', 'password');
	if(Auth::attempt($credentials)){
		return Redirect::intended('/');
	}
	return Redirect::to('login');
});

Route::get('/logout', function()
{
	Auth::logout();
	return View::make('logout');
});

Route::get('spotlight', function()
{
	return View::make('spotlight');
});*/

/*Route::get('spotlight', array(
'before' => 'auth.basic', //'auth'
function()
{
	return View::make('spotlight');
}));*/

Route::group(array('prefix' => 'admin'), function(){
	Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
	Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
	Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('posts', 'AdminPostsController', array('except' => array('show')));
});

	Route::get('/', array('as' => 'home', 'uses' => 'PostsController@getIndex'));
	Route::get('post/{id}', array('as' => 'post', 'uses' => 'PostsController@getPost'))->where('id', '[1-9][0-9]*');
