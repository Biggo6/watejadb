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
	public function sendAndstore(){

		$company_id = Auth::user()->company_id;
		$people     = Input::get('people');
		$body       = Input::get('body');

		$sms_count  = count($people);

		$total      = CompSMS::where('company_id', $company_id)->first()->total_sms;

		if($sms_count > $total){
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