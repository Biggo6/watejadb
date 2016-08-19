<?php


class RegionController extends BaseController{
	public function index(){
		return View::make('regions.index');
	}
	public function redirectWith(){
		return Redirect::to('app/configuration/regions')->with('Success', 'Successfully updated!');
	}
}