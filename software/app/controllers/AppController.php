<?php


class AppController extends BaseController{
	public function doLogin(){
		$credits = Input::all();
		$credits['status'] = 1;
		if(Auth::attempt($credits)){
			HelperX::updateLogintime();
			return Redirect::to('dashboard');
		}else{
			return Redirect::back()->with('Error', 'Invalid User, Please enter correct info');
		}
	}
	public function dashboard(){
		return View::make('dashboard');
	}
        public function logout(){
            
        	HelperX::updateLogouttime();
            Auth::logout();
            
            return Redirect::to('/');
        }
}