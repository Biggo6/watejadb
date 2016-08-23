<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PermissionController extends BaseController {

    public function add() {
        return View::make('permissions.add');
    }

    public function delete(){
    	$id = Input::get('id');
        Permission::find($id)->delete();
        return Response::json([
                'msg'   => ' Successfully deleted!',
                'error' => false
            ]);
    }

    public function refresh(){
    	return View::make('permissions.refresh');
    }

    public function store(){
    	$perm_module       = Input::get('perm_module');
    	$perm_route        = Input::get('perm_route');
    	$perm_action_name  = Input::get('perm_action_name');
    	$perm_active	   = Input::get('perm_active');

    	


    	$check             = Permission::where('name', $perm_action_name)->where('module_id', $perm_module)->where('route_link', $perm_route)->count();

    	if($check){
    		return Response::json([
                'msg'   => 'Permission already registred',
                'error' => true
    		]);
    	}else{
    		$p = new Permission;
    		$p->name = $perm_action_name;
    		$p->module_id = $perm_module;
    		$p->route_link = $perm_route;
    		$p->active = $perm_active;
    		$p->added_by = Auth::user()->id;
    		$p->save();
    		return Response::json([
	                    'msg'   => 'Successfully saved!',
	                    'error' => false
	                ]);
    	}
    }

    public function index(){
    	return View::make('permissions.index');
    }

    public function redirectWith(){
    	return Redirect::to('permissions')->with('Success', 'Successsfully added');
    }

}
