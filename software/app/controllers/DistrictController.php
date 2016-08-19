<?php



class DistrictController extends BaseController {

	public function index(){
		return View::make('districts.index');
	}

	public function refresh(){
		return View::make('partials.files._districts');
	}

	public function updateDistrict(){
		if(!count(Input::all())){
            return;
        }

        $id    = Input::get('district_id');
        $name    = Input::get('district_name');
        $region  = Input::get('district_region');
        $status  = Input::get('district_active');

        $check = District::where('name', $name)->where('region_id', $region)->where('id', $id)->count();

        if($check){
            $d = District::find($id);
            $d->name = $name;
            $d->region_id = $region;
            $d->active = $status;
            $d->save();
	        return Response::json([
	                'msg'   => 'Successfully saved!',
	                'error' => false
	            ]);    
        }else{

        	 $check_ = District::where('name', $name)->where('region_id', $region)->count();

	        if($check_){
	            return Response::json([
	                'msg'   => 'Region already registred 8',
	                'error' => true
	            ]);
	        }else{

	            $d = District::find($id);
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

	}

}