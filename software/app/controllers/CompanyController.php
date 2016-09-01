<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompanyController extends BaseController
{
    public function add()
    {
        return View::make('companies.add');
    }

    public function edit(){
        $id = Input::get('id');
        return View::make('partials.files._editCompany', compact('id'));
    }

    public function delete(){
        $id = Input::get('id');
        Company::find($id)->delete();
        return Response::json([
                'msg'   => ' Successfully deleted!' . $id,
                'error' => false
            ]);
    }

    public function refresh(){
        return View::make('partials.files._refreshCompanies');
    }

    public function manage(){
      return View::make('companies.index');
    }

    public function redirectWith(){
      return Redirect::to('company/manage')->with('Success', 'Successfully added!');
    }

    public function getDistricts()
    {
        $rid       = Input::get('region_id');
        $districts = District::where('region_id', $rid)->get();
        return View::make('partials.files._companyDistricts')->with('ds', $districts);
    }

    public function getBranches(){
        $cid       = Input::get('company_id');
        $branches = Branch::where('company_id', $cid)->get();
        return View::make('partials.files._companyBranches')->with('bs', $branches);
    }

    public function store()
    {
        $companyname = Input::get('companyname');
        $tin          = Input::get('tin');
        $address      = Input::get('address');
        $region       = Input::get('region');
        $district     = Input::get('district');
        $street       = Input::get('street');
        $telephone    = Input::get('telephone');
        $mobile       = Input::get('mobile');
        $email        = Input::get('email');
        $business     = Input::get('business');
        $website      = Input::get('website');

        $c                = new Company;
        $c->name          = $companyname;
        $c->region_id     = $region;
        $c->district_id   = $district;
        $c->email         = $email;
        $c->phone         = $telephone;
        $c->location      = $address;
        $c->mobile        = $mobile;
        $c->website       = $website;
        $c->street        = $street;
        $c->business_id   = $business;
        $c->added_by      = Auth::user()->id;

        if (Input::hasFile('logo')) {
            $c->company_logo =  Helper::uplodFileThenReturnPath('logo');
        } 

        $check = Company::where('tin', $tin)->count();

        if($check){
           return Response::json([
              'msg'   => 'Company already registred',
              'error' => true,
          ]);
        }else{
          $c->tin = $tin;
          $c->save();
           return Response::json([
            'msg'   => 'Successfully added!',
            'error' => false,
          ]);
        }

       
    }
}
