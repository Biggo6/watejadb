<?php


class RolesController extends BaseController{
	public function add(){
		return View::make('roles.add');
	}

	public function index(){
		return View::make('roles.index');
	}

	public function store(){
		$role_name         = Input::get('role_name');
		$role_module_cat   = Input::get('role_module_cat');
		$role_status	   = Input::get('role_status');
		$role_ids		   = Input::get('role_ids');
		$roles 			   =  explode(',' ,$role_ids);
		$check     		   = Role::where('name', $role_name)->where('added_by', Auth::user()->id)->count();
		if($check){
			return Response::json([
                    'msg'   => 'Role name already registred',
                    'error' => true
                ]);
		}else{
			$p = new Role;
			$p->name = $role_name;
			$p->status = $role_status;
			$p->system = $role_module_cat;
			$p->added_by = Auth::user()->id;
			$p->save();	
			for ($i=0; $i < count($roles); $i++) { 
				$p_id = (integer)$roles[$i];
				$rp   = new RolePerm;
				$rp->role_id = $p->id;
				$rp->permission_id = $p_id;
				$rp->save();
			}
			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}	 
	}

	public function redirectWith(){
		return Redirect::to('roles')->with('Success', 'Successfully added!');
	}

}