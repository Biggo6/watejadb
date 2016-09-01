<?php


class CustomerController extends BaseController{
	public function add(){
		return View::make('customers.add');
	}	
	public function redirectWith(){
		return Redirect::to('customers')->with('Success', 'Successfully added!');
	}

	public function index(){
		return View::make('customers.index');
	}

	public function store(){

		$firstname       = Input::get('firstname');
        $middlename      = Input::get('middlename');
        $lastname        = Input::get('lastname');
        $phone			 = Input::get('phone');
        $dob             = Input::get('dob');
        $gender          = Input::get('gender');
        $customer_code   = Input::get('customer_code');
        $mobile          = Input::get('mobile');
        $fax             = Input::get('fax');
        $email           = Input::get('email');
        $website         = Input::get('website');
        $pobox           = Input::get('pobox');
        $region          = Input::get('region');
        $district        = Input::get('district');
        $street          = Input::get('street');
        $location        = Input::get('location');
        $logo            = Input::get('logo');
        $instagram       = Input::get('instagram');
        $whatsapp        = Input::get('whatsapp');
        $subsuv          = (Input::get('subsuv') == "on") ? 'yes' : 'no' ;


        $customer                = new Customer;
        $customer->firstname     = $firstname;
        $customer->lastname      = $lastname;
        $customer->phone	     = $phone; 
        $customer->instagram	 = $instagram; 
        $customer->whatsappid	 = $whatsapp; 
        $customer->company_id	 = Auth::user()->company_id; 
        $customer->branch_id	 = Auth::user()->branch_id; 
        $customer->added_by	     = Auth::user()->id; 
        //$customer->customer_code = $customer_code;
        $customer->suburb	     = $subsuv;

        if (Input::hasFile('logo')) {
            $customer->photo =  Helper::uplodFileThenReturnPath('logo', 'uploads/customers/');
        } 


        $check = Customer::where('firstname', $firstname)->where('lastname', $lastname)->where('phone', $phone)->where('added_by', Auth::user()->id)->count();

        if($check){
        	return Response::json([
	                    'msg'   => 'Customer name already registred ',
	                    'error' => true
	                ]);
        }else{
        	$customer->save();
        	return Response::json([
	                    'msg'   => 'Successfully saved!',
	                    'error' => false
	                ]);
        }



	}
}