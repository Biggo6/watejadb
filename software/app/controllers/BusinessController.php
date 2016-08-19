<?php


class BusinessController extends BaseController{
	public function add(){
		return View::make('business.add');
	}

	public function index(){
		return View::make('business.index');
	}

	public function store(){
		
		$name   = Input::get('buz_name');
		$status = Input::get('buz_active');

		$check  = Business::where('name', $name)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Business name already registred',
                    'error' => true
                ]);
		}else{
			$b = new Business;
			$b->name = $name;
			$b->active = $status;
			$b->save();	
			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}

		
	}
}