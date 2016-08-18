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

Route::get('/', function()
{
	return View::make('login');
});

Route::post('/doLogin', ['as'=>'app.doLogin', 'uses'=>'AppController@doLogin']);	

Route::group(['before'=>'auth'], function(){
	// All auth routes goes here
 	Route::get('dashboard', ['as'=>'app.dashboard', 'uses'=>'AppController@dashboard']);
        Route::get('logout', ['as' => 'app.logout', 'uses'=>'AppController@logout']);
});
