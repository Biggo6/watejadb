<?php


class CustomerController extends BaseController{
	public function add(){
		return View::make('customers.add');
	}	
}