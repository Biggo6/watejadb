<?php 


class ModulesController extends BaseController{
	public function manage(){
		return View::make('modules.manage');
	}

	public function refresh(){
		return View::make('modules.refresh');
	}

	public function update(){
		$name   = Input::get('module_name');
		$cat   	= Input::get('module_cat');
		$status = Input::get('module_status');
		$id 	= Input::get('module_id');

		$check  = Module::where('name', $name)->where('system', $cat)->count();

		if($check){
				$b = Module::find($id);
				$b->name = $name;
				$b->status = $status;
				$b->system = $cat;
				$b->save();	
				return Response::json([
	                    'msg'   => 'Successfully Updated!',
	                    'error' => false
	                ]);
		}else{
			
			$check_  = Module::where('name', $name)->where('system', $cat)->count();

			if($check_){
				return Response::json([
	                    'msg'   => 'Module name already registred',
	                    'error' => true
	                ]);
			}else{
				$b = Module::find($id);
				$b->name = $name;
				$b->status = $status;
				$b->system = $cat;
				$b->save();	
				return Response::json([
	                    'msg'   => 'Successfully Updated!',
	                    'error' => false
	                ]);
			}
		}
	}

	public function redirectWith(){
		return Redirect::to('app/configuration/modules')->with('Success', 'Successfully updated');
	}

	public function edit(){
		$id = Input::get('id');
		return View::make('modules.edit', compact('id'));
	}

	public function delete(){
		$id = Input::get('id');
        Module::find($id)->delete();
        return Response::json([
                'msg'   => ' Successfully deleted!',
                'error' => false
            ]);
	}

	public function store(){
		$name   = Input::get('module_name');
		$cat   = Input::get('module_cat');
		$status = Input::get('module_status');

		$check  = Module::where('name', $name)->where('system', $cat)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Module name already registred',
                    'error' => true
                ]);
		}else{
			$b = new Module;
			$b->name = $name;
			$b->status = $status;
			$b->system = $cat;
			$b->save();	
			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}

	}
}