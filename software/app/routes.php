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
    //Business codes
    Route::get('business/index',['as'=>'business.index', 'uses'=>'BusinessController@index']);
    Route::get('business/add',['as'=>'business.add', 'uses'=>'BusinessController@add']);
    Route::post('business/store',['as'=>'business.store', 'uses'=>'BusinessController@store']);
    Route::post('business/delete',['as'=>'business.delete', 'uses'=>'BusinessController@delete']);
    Route::post('business/edit',['as'=>'business.edit', 'uses'=>'BusinessController@edit']);
    Route::get('business/refresh',['as'=>'business.refresh', 'uses'=>'BusinessController@refresh']);
    Route::post('business/update',['as'=>'business.update', 'uses'=>'BusinessController@update']);
    Route::get('business/redirectWith',['as'=>'business.redirectWith', 'uses'=>'BusinessController@redirectWith']);


    //Company codes
    Route::get('company/add',['as'=>'company.add', 'uses'=>'CompanyController@add']);
    Route::get('company/manage',['as'=>'company.manage', 'uses'=>'CompanyController@manage']);
    Route::get('company/refresh',['as'=>'company.refresh', 'uses'=>'CompanyController@refresh']);
    Route::post('company/getDistricts',['as'=>'company.getDistricts', 'uses'=>'CompanyController@getDistricts']);
    //Config codes
    Route::get('app/configuration',['as'=>'app.configuration', 'uses'=>'ConfigController@manage']);
    
    Route::post('app/configuration/storeRegion',['as'=>'app.configuration.storeRegion', 'uses'=>'ConfigController@storeRegion']);
    Route::post('app/configuration/storeDistrict',['as'=>'app.configuration.storeDistrict', 'uses'=>'ConfigController@storeDistrict']);

    Route::get('app/configuration/refreshRegions', ['as'=>'app.configuration.refreshRegions', 'uses'=>'ConfigController@refreshRegions']);
    Route::get('app/configuration/refreshDistricts', ['as'=>'app.configuration.refreshDistricts', 'uses'=>'ConfigController@refreshDistricts']);

    Route::get('app/configuration/refreshAddRegion', ['as'=>'app.configuration.refreshAddRegion', 'uses'=>'ConfigController@refreshAddRegion']);

    Route::get('app.configuration.editRegion', ['as'=>'app.configuration.editRegion', 'uses'=>'ConfigController@editRegion']);
    Route::get('app.configuration.editDistrict', ['as'=>'app.configuration.editDistrict', 'uses'=>'ConfigController@editDistrict']);

    Route::post('app/configuration/deleteRegion', ['as'=>'app.configuration.deleteRegion', 'uses'=>'ConfigController@deleteRegion']);
    Route::post('app/configuration/deleteDistrict', ['as'=>'app.configuration.deleteDistrict', 'uses'=>'ConfigController@deleteDistrict']);
    
    Route::post('app/configuration/updateRegion', ['as'=>'app.configuration.updateRegion', 'uses'=>'ConfigController@updateRegion']);

    // Manage Regions
    Route::get('app/configuration/regions', ['as'=>'app.configuration.regions', 'uses'=>'RegionController@index']);  
    Route::get('app/configuration/redirecthRegions', ['as'=>'app.configuration.redirecthRegions', 'uses'=>'RegionController@redirectWith']);  
    // Manage Districts
    Route::get('app/configuration/districts', ['as'=>'app.configuration.districts', 'uses'=>'DistrictController@index']);    



});
