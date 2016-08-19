<?php


class ConfigController  extends BaseController{
	public function manage(){
		return View::make('config.manage');
	}

	public function editRegion(){
		$id = Input::get('id');
		return View::make('partials.files._editRegion', compact('id'));
	}

    public function updateRegion(){
        if(!count(Input::all())){
            return;
        }
        $id     =  Input::get('id');
        $name   =  Input::get('region_name');
        $status =  Input::get('region_active');

        $check  =  Region::where('name', $name)->where('id', $id)->count();
        if($check){
            $r = Region::find($id);
                $r->name = $name;
                $r->active = (int)$status;
                $r->save();
                return Response::json([
                    'msg'   => 'Successfully updated!' ,
                    'error' => false
                ]);
        }else{
            // Check and Save
            $check_  = Region::where('name', $name)->count();
            if($check_){
                return Response::json([
                    'msg'   => 'Region already registred',
                    'error' => true
                ]);
            }else{
                $r = Region::find($id);
                $r->name = $name;
                $r->active = (int)$status;
                $r->save();
                return Response::json([
                    'msg'   => 'Successfully updated!',
                    'error' => false
                ]);
            }
        }
    }

    public function refreshAddRegion(){
        return View::make('partials.files._addRegion');
    }

	public function storeRegion(){

		if(!count(Input::all())){
			return;
		}

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

    

    public function editDistrict(){
        $id = Input::get('id');
        return View::make('partials.files._editDistrict', compact('id'));
    }

    public function storeDistrict(){

        if(!count(Input::all())){
            return;
        }

        $name    = Input::get('district_name');
        $region  = Input::get('district_region');
        $status  = Input::get('district_active');

        $check = District::where('name', $name)->where('region_id', $region)->count();

        if($check){
            return Response::json([
                'msg'   => 'Region already registred',
                'error' => true
            ]);
        }else{

            $d = new District;
            $d->name = $name;
            $d->region_id = $region;
            $d->active = $status;
            $d->save();

            return Response::json([
                'msg'   => 'Successfully saved!',
                'error' => false
            ]);
        }

        
    }


    public function refreshRegions(){
    	return View::make('partials.files._regions');
    }

    public function refreshDistricts(){
        return View::make('partials.files._districts');   
    }

    public function deleteRegion(){
    	$id = Input::get('id');
    	sleep(1);
    	Region::deleteAllDependX($id);
    	return Response::json([
                'msg'   => ' Successfully deleted!',
                'error' => false
    		]);
    }

    public function deleteDistrict(){
        $id = Input::get('id');
        sleep(1);
        District::find($id)->delete();
        return Response::json([
                'msg'   => ' Successfully deleted!',
                'error' => false
            ]);
    }

}