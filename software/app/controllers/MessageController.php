<?php

class MessageController  extends BaseController{



	public function sms(){
		return View::make('messages.sms');
	}
	public function instagram(){
		return View::make('messages.instagram');
	}	
	public function whatsapp(){
		return View::make('messages.whatsapp');
	}

	public function sendAndstoreGroup(){
		$company_id = Auth::user()->company_id;
		$groups     = Input::get('groups');
		$body       = Input::get('body');

		$tot_cs = 0;
		foreach ($groups as $g) {
			$gp_id  = Group::where('group_name', $g)->first()->id;
			$cg     = CG::where('group_id', $gp_id)->count();
			$tot_cs = $tot_cs + $cg; 
		}

		$sms_count  = $tot_cs;

		$total      = CompSMS::where('company_id', $company_id)->first()->total_sms;

		if($sms_count > $total){
			$cs = CompSMS::where('company_id', $company_id)->first();
			$cs->active = 0;
			$cs->save();
			return Response::json([
	                    'msg'   => 'You dont have enough messages to send ' . $sms_count . ' messages',
	                    'error' => true
	                ]);
		}else{

			// send to the real service here codes:

			$m = new Message;

			foreach ($groups as $gx) {
				$gp_id  = Group::where('group_name', $gx)->first()->id;
				$cg     = CG::where('group_id', $gp_id)->get();
				foreach ($cg as $c) {
					$cr = Customer::find($c->customer_id);
					$mobile_no = '255' . $cr->phone;
					$m->receiver = $mobile_no;
					$m->sender   = Auth::user()->id;
					$m->status   = 'Sending';
					$m->group_name = $gx;
					$m->body     = $body;
					$m->save();
				}
				
			}



			$diff = $total - (float)$sms_count;
			$cs = CompSMS::where('company_id', $company_id)->first();
			$cs->total_sms = $diff;
			$cs->save();
			return Response::json([
	                    'msg'   => 'Successfully send ' . number_format($diff) . ' messages',
	                    'error' => false
	                ]);
		}
	}

	public function checkUsername(){
		$ig = Input::get('ig');

		try{

			$data = HelperX::getResults($ig);

			if(!empty($data)){

				$status = $data["status"];

				if($status == "ok"){
					if(array_key_exists('user', $data)){
						$users           = ($data["user"]);
						$username        = $users["username"];
						$profile_pic_url = $users["profile_pic_url"];
						$full_name       = $users["full_name"];
						$url = str_replace('\\', '', $profile_pic_url);
						$arr = [];
						$str = $url.'#' . $full_name . '#' . $username;
						$arr[] = $str;
						return $str;//Response::json($arr);
					}else{
						return [];
					}
					
				}

				
			}


		}catch(Exception $s){
			return [];
		}
	

	}

	public function sendAndstore(){

		$company_id = Auth::user()->company_id;
		$people     = Input::get('people');
		$body       = Input::get('body');

		$sms_count  = count($people);

		$total      = CompSMS::where('company_id', $company_id)->first()->total_sms;

		if($sms_count > $total){
			$cs = CompSMS::where('company_id', $company_id)->first();
			$cs->active = 0;
			$cs->save();
			return Response::json([
	                    'msg'   => 'You dont have enough messages to send ' . $sms_count . ' messages',
	                    'error' => true
	                ]);
		}else{

			// send to the real service here codes:

			$m = new Message;

			foreach ($people as $p) {
				$mobile_no = $p;
				$m->receiver = $mobile_no;
				$m->sender   = Auth::user()->id;
				$m->status   = 'Sending';
				$m->body     = $body;
				$m->save();
			}


			$diff = $total - (float)$sms_count;
			$cs = CompSMS::where('company_id', $company_id)->first();
			$cs->total_sms = $diff;
			$cs->save();
			return Response::json([
	                    'msg'   => 'Successfully send ' . number_format($diff) . ' messages',
	                    'error' => false
	                ]);
		}

		
	}
}