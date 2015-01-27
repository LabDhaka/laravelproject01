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
// return View::make('hello');

//Home page with log-in form
Route::get('/', function()
{
	return View::make('home');
	//return 'This is login page...';
});
//login page
Route::get('/login', function()
{
	return View::make('login');
});

//post method for login
Route::post('/login', function()
{
	$data = Input::all();
	$rules = array(
		'name' => 'required',
		'password' => 'required'
		);
	$validator = Validator::make($data, $rules);

	if($validator->fails()){
		return Redirect::to('/login')->withErrors($validator)->withInput();
	}
	return 'Login Successful...:)';
});


//Home page with sign-up form
Route::get('/signup', function()
{
	return 'This is signup page...';
});

//if success then go to user home page
Route::get('/userhome', function()
{
	return 'Now this is real fun page...';
});

