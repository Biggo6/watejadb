<?php


class  SubscriptionController extends BaseController {
	public function add(){
		return View::make('subs.add');
	}

	public function index(){
		return View::make('subs.index');
	}

	public function store(){
		$package    = Input::get('package');
		$substatus  = Input::get('substatus');
		$company    = Input::get('company');
		$branch     = Input::get('branch');
		$licience   = Input::get('lic');


		$check 		= Subscription::where('company_id', $company)->where('branch_id', $branch)->where('status', 1)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Subscription  already done!',
                    'error' => true
                ]);
		}else{
			$s = new Subscription;
			$s->company_id = $company;
			$s->branch_id  = $branch;
			$s->subscription_id = $package;
			$s->status  = $substatus;
			$s->licience = $licience;
			$s->save();
			return Response::json([
                    'msg'   => 'Successfully saved!',
                    'error' => false
                ]);
		}


	}

	public function redirectWith(){
		return Redirect::to('subscription/index')->with('Success', 'Successfully added!');
	}

}