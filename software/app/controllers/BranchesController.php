<?php


class BranchesController  extends BaseController{
	public function manage(){
		return View::make('branches.manage');
	}
	public function store(){
		$branch_name   = Input::get('branch_name');
		$branch_phone   = Input::get('branch_phone');
		$branch_location   = Input::get('branch_location');
		$branch_camp   = Input::get('branch_camp');
		$branch_status   = Input::get('branch_status');
		

		$check  = Branch::where('name', $branch_name)->where('company_id', $branch_camp)->where('added_by', Auth::user()->id)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Branch name already registred',
                    'error' => true
                ]);
		}else{
			$b = new Branch;
			$b->name = $branch_name;
			$b->company_id = $branch_camp;
			$b->phone = $branch_phone;
			$b->location = $branch_location;
			$b->status = $branch_status;
			$b->added_by = Auth::user()->id;
			$b->save();

			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}
	}

	public function refresh(){
		return View::make('branches.refresh');
	}
}