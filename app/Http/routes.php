<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('before' => 'auth'), function () {
    Route::get('/', 'HomeController@index');
	Route::get('logout', 'UserController@logoutUser');
	
	// Country route
	Route::group(array('prefix' => '/country'), function() {
		Route::get('/', array('as' => 'country', 'uses' => 'CountryController@index'));
	});
	
	// Flight route
	Route::group(array('prefix' => '/'), function() {
		Route::get('/flight', array('as' => 'flight', 'uses' => 'FlightController@index'));
	});
});
Route::get('login', 'UserController@login');
Route::post('login', 'UserController@postLogin');
Route::post('register', 'UserController@registerUser');


//Route::get('User/signup', array('as' => 'signup', 'uses' => 'UserController@signUp'));

