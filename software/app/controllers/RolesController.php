<?php


class RolesController extends BaseController{
	public function add(){
		return View::make('roles.add');
	}

	public function index(){
		return View::make('roles.index');
	}
}