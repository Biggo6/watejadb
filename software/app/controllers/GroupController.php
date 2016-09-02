<?php


class GroupController extends BaseController{
	public function add(){
		return View::make('groups.add');
	}

	public function index(){
		return View::make('groups.index');
	}

	public function store(){

		$groupname    = Input::get('groupname');
		$customers    = Input::get('customers');
		$groupstatus  = Input::get('groupstatus');

		$g = new Group;
		$g->group_name = $groupname;
		$g->status     = $groupstatus;
		$g->added_by = Auth::user()->id;

		

		if (Input::hasFile('logo')) {
            $g->group_icon =  Helper::uplodFileThenReturnPath('logo', 'uploads/groups/');
        } 

        $check  = Group::where('group_name', $groupname)->where('added_by', Auth::user()->id)->count();

		if($check){
           return Response::json([
              'msg'   => 'Group already registred',
              'error' => true,
          ]);
        }else{
           $g->save();

           $gid = $g->id;

           for ($i=0; $i < count($customers); $i++) { 
           		$cid = $customers[$i];
           		$cg = new CG;
           		$cg->group_id  = $gid;
           		$cg->added_by  = Auth::user()->id;
           		$cg->customer_id = (integer)$cid;
           		$cg->save();
           }

           return Response::json([
            'msg'   => 'Successfully added!',
            'error' => false,
          ]);
        }
	}

	public function redirectWith(){
		return Redirect::to('groups')->with('Success', 'Successfully saved!');
	}

}