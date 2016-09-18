<?php


class ActivateKeyController  extends BaseController{
	public function activate(){
		$key  = Input::get('key_');
		$cid = Auth::user()->company_id;
		$bid = Auth::user()->branch_id;
		$sub = Subscription::where('company_id', $cid)->where('branch_id', $bid)->first();
		$lic = $sub->licience;
		$intentedRoute  = Input::get('intentedRoute');


		if($lic != $key){
			return Redirect::back()->with('Error', 'Invalid KEY');	
		}else{
			$sub->tried = 1;
			$sub->save();
			$user = Auth::user();
			$user->tried = 1;
			$user->save();
			return Redirect::route($intentedRoute);
		}
		
	}
}