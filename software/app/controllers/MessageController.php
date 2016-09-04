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
}