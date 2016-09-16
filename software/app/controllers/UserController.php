<?php


class UserController extends BaseController{
	public function add(){
		return View::make('users.add');
	}

	public function index(){
		return View::make('users.index');
	}


  public function getPerms(){
    $uid = Input::get('user');
    return View::make('users.getPerms')->with('uid', $uid);
  }

	public function store(){

		    $username       = Input::get('username');
        $email          = Input::get('email');
        $firstname      = Input::get('firstname');
        $lastname       = Input::get('lastname');
        $password       = Input::get('password');
        $company        = Input::get('company');
        $branch        = Input::get('branch');
        $role           = Input::get('role');

        $user 	= new User;
        $user->firstname  = $firstname;
        $user->lastname   = $lastname;
        $user->email 	  = $email;
      	$user->role_id    = $role;
        $user->company_id = $company;
      	$user->branch_id = $branch;
      	$user->username   = $username;
      	$user->password   = Hash::make($password);

        $user->added_by    = Auth::user()->id;

        if (Input::hasFile('logo')) {
            $user->profilepic =  Helper::uplodFileThenReturnPath('logo', 'uploads/users/');
        } 
        if(Auth::user()->role_id == 1){
        	$check = User::where('username', $username)->where('company_id', $company)->count();
        }else{
        	$check = User::where('username', $username)->where('company_id', $company)->where('added_by', Auth::user()->id)->count();
        }
        

        if($check){
           return Response::json([
              'msg'   => 'User already registred',
              'error' => true,
          ]);
        }else{
           $user->save();
           return Response::json([
            'msg'   => 'Successfully added!',
            'error' => false,
          ]);
        }
	}

	public function redirectWith(){
		return Redirect::to('users')->with('Success', 'Successfully added!');
	}
}