<?php


class AppController extends BaseController{
	public function doLogin(){
		$credits = Input::all();
		if(Auth::attempt($credits)){
			return Redirect::to('dashboard');
		}else{
			return Redirect::back()->with('Error', 'Invalid User, Please enter correct info');
		}
	}
	public function dashboard(){
		return View::make('dashboard');
	}
        public function logout(){
            Auth::logout();
            return Redirect::to('/');
        }
}