<?php


class RegionController extends BaseController{
	public function index(){
		return View::make('regions.index');
	}
}