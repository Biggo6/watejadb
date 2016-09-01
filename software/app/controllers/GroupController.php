<?php


class GroupController extends BaseController{
	public function add(){
		return View::make('groups.add');
	}

	public function index(){
		return View::make('groups.index');
	}
}