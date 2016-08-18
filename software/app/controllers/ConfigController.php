<?php


class ConfigController  extends BaseController{
	public function manage(){
		return View::make('config.manage');
	}
	public function storeRegion(){
    	$name   =  Input::get('region_name');
    	$status =  Input::get('region_active');
    	$check 	= Region::where('name', $name)->count();
    	if($check){
    		return Response::json([
                'msg'   => 'Region already registred',
                'error' => true
    		]);
    	}else{
    		$r = new Region;
    		$r->name = $name;
    		$r->active = $status;
    		$r->save();
    		return Response::json([
                'msg'   => 'Successfully saved!',
                'error' => false
    		]);
    	}
    }
    public function refreshRegions(){
    	return View::make('partials.files._regions');
    }

}