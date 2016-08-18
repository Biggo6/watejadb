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
Route::get('/', function() {
    return View::make('login');
});
Route::post('/doLogin', ['as' => 'app.doLogin', 'uses' => 'AppController@doLogin']);
Route::group(['before' => 'auth'], function() {
    // All auth routes goes here
    Route::get('dashboard', ['as' => 'app.dashboard', 'uses' => 'AppController@dashboard']);
    //Logout
    Route::get('logout', ['as' => 'app.logout', 'uses' => 'AppController@logout']);
    //Company codes
    Route::get('company/add',['as'=>'company.add', 'uses'=>'CompanyController@add']);
    Route::get('company/manage',['as'=>'company.manage', 'uses'=>'CompanyController@manage']);
    Route::get('company/refresh',['as'=>'company.refresh', 'uses'=>'CompanyController@refresh']);
    //Config codes
    Route::get('app/configuration',['as'=>'app.configuration', 'uses'=>'ConfigController@manage']);
    Route::post('app/configuration/storeRegion',['as'=>'app.configuration.storeRegion', 'uses'=>'ConfigController@storeRegion']);
    Route::get('app/configuration/refreshRegions', ['as'=>'app.configuration.refreshRegions', 'uses'=>'ConfigController@refreshRegions']);
});
