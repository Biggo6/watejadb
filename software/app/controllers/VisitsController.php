<?php


class VisitsController extends BaseController{
	public function add(){
		return View::make('visits.add');
	}

	public function index(){
		return View::make('visits.index');
	}
}