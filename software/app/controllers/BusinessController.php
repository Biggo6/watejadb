<?php


class BusinessController extends BaseController{
	public function add(){
		return View::make('business.add');
	}

	public function index(){
		return View::make('business.index');
	}

	public function update(){
		sleep(1);
		$name   = Input::get('buz_name');
		$status = Input::get('buz_active');
		$bid    = Input::get('bid');

		$check  = Business::where('name', $name)->where('id', $bid)->count();

		if($check){
			$b = Business::find($bid);
				$b->name   =  $name;
				$b->active =  $status;
				$b->save();
				return Response::json([
	                    'msg'   => 'Successifully updated',
	                    'error' => false
	                ]);
		}else{
			$check_  = Business::where('name', $name)->count();

			if($check_){
				return Response::json([
	                    'msg'   => 'Business name already registred',
	                    'error' => true
	                ]);
			}else{
				$b = Business::find($bid);
				$b->name   =  $name;
				$b->active =  $status;
				$b->save();
				return Response::json([
	                    'msg'   => 'Successifully updated',
	                    'error' => false
	                ]);
			}
		}
	}

	public function edit(){
		$id = Input::get('id');
		sleep(1);
		return View::make('partials.files._editBusiness', compact('id'));
	}

	public function refresh(){
		return View::make('partials.files._refreshBusiness');
	}

	public function redirectWith(){
		return Redirect::to('business/index')->with('Success', 'Successfully added!');
	}

	public function delete(){
		 $id = Input::get('id');
        sleep(1);
        Business::find($id)->delete();
        return Response::json([
                'msg'   => ' Successfully deleted!',
                'error' => false
            ]);
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