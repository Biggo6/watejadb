<?php


class CompSmsController extends BaseController{
	public function store(){
		
		$camp    = Input::get('camp');
		$msg     = Input::get('msg');
		$status  = Input::get('status');

		$check   = CompSMS::where('company_id', $camp)->where('active', $status)->where('added_by', Auth::user()->id)->count();

		if($check){
			return Response::json([
                    'msg'   => 'Already registered!' ,
                    'error' => true
                ]);
		}else{

			$cm = new CompSMS;
			$cm->company_id = $camp;
			$cm->total_sms  = $msg;
			$cm->active     = $status;
			$cm->added_by   = Auth::user()->id;
			$cm->save();

			return Response::json([
                    'msg'   => 'Successfully added!',
                    'error' => false
                ]);
		}


	}
	public function refresh(){
			return View::make('messages.refresh');
	}
}