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
Route::get('/', 'HomeController@home');
Route::controller('users', 'UsersController');


/*

//LOGIN
Route::get('login', array('as' => 'login', function () { 
	return View::make('login');
}))->before('guest');;
Route::post('login', 'SessionController@login');
Route::get('logout', array('as' => 'logout', function () { return View::make('profile'); }))->before('auth');
Route::get('profile', array('as' => 'profile', function () { }))->before('auth');*/