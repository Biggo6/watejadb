<?php


class PackagesController  extends BaseController{
	public function add(){
		return View::make('packages.add');
	}
	public function index(){
		return View::make('packages.index');
	}
	public function store(){
		$packagename     =  Input::get('packagename');
		$packagestatus   =  Input::get('packagestatus');
		$duration        =  Input::get('duration');

		$check   = Package::where('package', $packagename)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Package already registred',
                    'error' => true
                ]);
		}else{
			$p = new Package;
			$p->package = $packagename;
			$p->active  = $packagestatus;
			$p->duration_days = $duration;
			$p->save();
			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}

	}

	public function redirectWith(){
		return Redirect::to('packages/index')->with('Success', 'Successfully added!');
	}

}