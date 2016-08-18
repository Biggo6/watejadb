@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Companies</a></li><li class="active">Add Company</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Company Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="companyname"  id="companyname"
                     	
    				/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Address is required!" data-prompt-position="bottomRight" name="address" id="address"
                    	
  
                     />
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Region</label>
                            <select id="region" type="text" class="form-control validate[required]" data-errormessage-value-missing="Region is required!" data-prompt-position="bottomRight" name="region"
                            
                            ></select>
                        </div>
                        <div class="col-sm-4">
                            <label>District</label>
                            <select id="district" type="text" class="form-control validate[required]" data-errormessage-value-missing="District is required!" data-prompt-position="bottomRight" name="district"
                            	
                            ></select>
                        </div>
                        <div class="col-sm-4">
                            <label>Street</label>
                            <input id="street" type="text" class="form-control validate[required]" data-errormessage-value-missing="Street is required!" data-prompt-position="bottomRight" name="street"
                            	
                             />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Telephone </label>
                    <input type="text" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="Telephone is required!" data-prompt-position="bottomRight" name="telephone" id="telephone"
                     />
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Mobile</label>
                            <input id="mobile" type="text" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="Mobile is required!" data-prompt-position="bottomRight" name="mobile"
                            	
  					  			
                             />
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control validate[required,custom[email]]" data-errormessage-value-missing="Email is required!" data-prompt-position="bottomRight" name="email"
                            	
                             />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Business</label>
                            <select id="business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Business is required!" data-prompt-position="bottomRight" name="business"
                            	
                            ></select>
                        </div>
                        <div class="col-sm-6">
                            <label>Logo</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default" data-errormessage-value-missing="Logo is required!" data-prompt-position="bottomRight" title="Select Logo Image"
                            	
                             />
                             <hr/>
                            <div id="logo-placeholder"></div>
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Website</label>
                            <input id="website" type="text" class="form-control validate[required]" data-errormessage-value-missing="Website is required!" data-prompt-position="bottomRight" name="website"
                            	
                             />
                        </div>

                    </div>
                </div>
                <hr/>
                <br/>

                <button type="button"  register="save" class="btn btn-primary register">Save</button>
                <button type="button"  register="saveandnew" class="btn btn-success register">Save & New</button>
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


</div>

@include('partials.scripts._company');


@stop

