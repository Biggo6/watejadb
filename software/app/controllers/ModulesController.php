<?php 


class ModulesController extends BaseController{
	public function manage(){
		return View::make('modules.manage');
	}
}