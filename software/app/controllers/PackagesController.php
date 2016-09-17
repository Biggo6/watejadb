<?php


class PackagesController  extends BaseController{
	public function add(){
		return View::make('packages.add');
	}
	public function index(){
		return View::make('packages.index');
	}
}