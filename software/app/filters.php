<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('checkLicience', function(){
	if(Auth::user()->role_id != 1){
		$cid = Auth::user()->company_id;
		$bid = Auth::user()->branch_id;
		$check = Subscription::where('company_id', $cid)->where('branch_id', $bid)->where('status', 1)->where('tried', 0)->count();
		if($check){
			return View::make('lockscreen');
		}else{
			$userTried = Auth::user()->tried;
			if($userTried == 0){
				return View::make('lockscreen');
			}
		}
	}
});

Route::filter('auth', function()
{

	

	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('/');
		}
	}else{
		if(Auth::user()->role_id != 1){
			if(HelperX::getRemainDays() < 0){
				HelperX::deactivatePackage();
				return Redirect::to('/')->with('Info', 'Your Licence Expired - ' . HelperX::getPackage());
			}
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
