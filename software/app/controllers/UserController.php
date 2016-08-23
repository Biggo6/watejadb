<?php


class UserController extends BaseController{
	public function add(){
		return View::make('users.add');
	}

	public function index(){
		return View::make('users.index');
	}
}