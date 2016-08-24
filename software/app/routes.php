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
    Route::post('companies/delete',['as'=>'companies.delete', 'uses'=>'CompanyController@delete']);
    Route::post('companies/edit',['as'=>'companies.edit', 'uses'=>'CompanyController@edit']);
    Route::post('company/store',['as'=>'company.store', 'uses'=>'CompanyController@store']);
    Route::get('company/manage',['as'=>'company.manage', 'uses'=>'CompanyController@manage']);
    Route::get('company/redirectWith',['as'=>'company.redirectWith', 'uses'=>'CompanyController@redirectWith']);
    Route::get('company/refresh',['as'=>'company.refresh', 'uses'=>'CompanyController@refresh']);
    Route::post('company/getDistricts',['as'=>'company.getDistricts', 'uses'=>'CompanyController@getDistricts']);
    
    //Permissions
    Route::get('permissions/add', ['as'=>'permissions.add', 'uses'=>'PermissionController@add']);
    Route::get('permissions', ['as'=>'permissions.index', 'uses'=>'PermissionController@index']);
    Route::get('permissions/redirectWith', ['as'=>'permissions.redirectWith', 'uses'=>'PermissionController@redirectWith']);
    Route::post('permissions/store', ['as'=>'permissions.store', 'uses'=>'PermissionController@store']);
    Route::post('permissions/delete', ['as'=>'permissions.delete', 'uses'=>'PermissionController@delete']);
    Route::post('permissions/edit', ['as'=>'permissions.edit', 'uses'=>'PermissionController@edit']);
    Route::get('permissions/refresh', ['as'=>'permissions.refresh', 'uses'=>'PermissionController@refresh']);

    // Modules code
    Route::post('modules/store', ['as'=>'modules.store', 'uses'=>'ModulesController@store']);
    Route::post('modules/delete', ['as'=>'modules.delete', 'uses'=>'ModulesController@delete']);
    Route::post('modules/edit', ['as'=>'modules.edit', 'uses'=>'ModulesController@edit']);
    Route::get('modules/refresh', ['as'=>'modules.refresh', 'uses'=>'ModulesController@refresh']);
    Route::get('modules/redirectWith', ['as'=>'modules.redirectWith', 'uses'=>'ModulesController@redirectWith']);
    Route::post('modules/update', ['as'=>'modules.update', 'uses'=>'ModulesController@update']);

    // Roles code
    Route::get('roles/add', ['as'=>'roles.add', 'uses'=>'RolesController@add']);
    Route::get('roles', ['as'=>'roles', 'uses'=>'RolesController@index']);
    Route::post('roles/store', ['as'=>'roles.store', 'uses'=>'RolesController@store']);
    Route::post('roles/delete', ['as'=>'roles.delete', 'uses'=>'RolesController@delete']);
    Route::post('roles/edit', ['as'=>'roles.edit', 'uses'=>'RolesController@edit']);
    Route::get('roles/redirectWith', ['as'=>'roles.redirectWith', 'uses'=>'RolesController@redirectWith']);

    // Users code
    Route::get('users/add', ['as'=>'users.add', 'uses'=>'UserController@add']);
    Route::get('users', ['as'=>'users', 'uses'=>'UserController@index']);


    //Config codes
    Route::get('app/configuration',['as'=>'app.configuration', 'uses'=>'ConfigController@manage']);
    
    Route::post('app/configuration/storeRegion',['as'=>'app.configuration.storeRegion', 'uses'=>'ConfigController@storeRegion']);
    Route::post('app/configuration/storeDistrict',['as'=>'app.configuration.storeDistrict', 'uses'=>'ConfigController@storeDistrict']);

    Route::get('app/configuration/refreshRegions', ['as'=>'app.configuration.refreshRegions', 'uses'=>'ConfigController@refreshRegions']);
    Route::get('app/configuration/refreshDistricts', ['as'=>'app.configuration.refreshDistricts', 'uses'=>'ConfigController@refreshDistricts']);

    Route::get('app/configuration/refreshAddRegion', ['as'=>'app.configuration.refreshAddRegion', 'uses'=>'ConfigController@refreshAddRegion']);

    Route::get('app/configuration./editRegion', ['as'=>'app.configuration.editRegion', 'uses'=>'ConfigController@editRegion']);
    Route::post('app./configuration/editDistrict', ['as'=>'app.configuration.editDistrict', 'uses'=>'ConfigController@editDistrict']);

    Route::get('app/configuration/modules',['as'=>'app.configuration.modules', 'uses'=>'ModulesController@manage']);

    Route::post('app/configuration/deleteRegion', ['as'=>'app.configuration.deleteRegion', 'uses'=>'ConfigController@deleteRegion']);
    Route::post('app/configuration/deleteDistrict', ['as'=>'app.configuration.deleteDistrict', 'uses'=>'ConfigController@deleteDistrict']);
    
    Route::post('app/configuration/updateRegion', ['as'=>'app.configuration.updateRegion', 'uses'=>'ConfigController@updateRegion']);

    // Manage Regions
    Route::get('app/configuration/regions', ['as'=>'app.configuration.regions', 'uses'=>'RegionController@index']);  
    Route::get('app/configuration/redirecthRegions', ['as'=>'app.configuration.redirecthRegions', 'uses'=>'RegionController@redirectWith']);  
    // Manage Districts
    Route::get('app/configuration/districts', ['as'=>'app.configuration.districts', 'uses'=>'DistrictController@index']); 
    Route::get('districts/refresh', ['as'=>'districts.refresh', 'uses'=>'DistrictController@refresh']);   
    Route::post('app/configuration/updateDistrict', ['as'=>'app.configuration.updateDistrict', 'uses'=>'DistrictController@updateDistrict']);



});
