<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompanyController extends BaseController{
    public function add(){
        return View::make('companies.add');
    }

    public function getDistricts(){
    	$rid       = Input::get('region_id');
    	$districts = District::where('region_id', $rid)->get();
    	return View::make('partials.files._companyDistricts')->with('ds', $districts); 
    }
   
}