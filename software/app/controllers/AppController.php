<?php


class AppController extends BaseController{
	public function doLogin(){
		$credits = Input::all();
		if(Auth::attempt($credits)){
			return Redirect::to('dashboard');
		}else{
			return Redirect::back()->with('Error', 'Invalid User, Please contact: 0712-315840');
		}
	}
	public function dashboard(){
		return View::make('dashboard');
	}
}