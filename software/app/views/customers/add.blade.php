@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Customers</a></li><li class="active">Add Customer</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-12 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Customer Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Firstname</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Firstname is required!" data-prompt-position="bottomRight" name="firstname"  id="firstname" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Middlename</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Middlename is required!" data-prompt-position="bottomRight" name="middlename"  id="middlename" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Lastname</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Lastname is required!" data-prompt-position="bottomRight" name="lastname"  id="lastname" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Customer Code #</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Customer Code # is required!" data-prompt-position="bottomRight" name="customer_code"  id="customer_code" />
                        </div>

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Date Of Birth</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Date Of Birth is required!" data-prompt-position="bottomRight" name="dob"  id="dob" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Gender</label>
                            <select class="form-control">
                                <option>-- Select Gender Here ---</option>
                                <option> Male </option>
                                <option> Female</option>
                            </select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Phone</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Phone is required!" data-prompt-position="bottomRight" name="phone"  id="phone" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Mobile</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Mobile # is required!" data-prompt-position="bottomRight" name="mobile"  id="mobile" />
                        </div>

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Fax</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Fax is required!" data-prompt-position="bottomRight" name="fax"  id="fax" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Email</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Email is required!" data-prompt-position="bottomRight" name="email"  id="email" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Website</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Website is required!" data-prompt-position="bottomRight" name="website"  id="website" />
                        </div>

                    </div>  
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>P.O BOX</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Website is required!" data-prompt-position="bottomRight" name="website"  id="website" />
                        </div>

                    </div>   
                      
                </div>

                

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                            <label>Region</label>
                            <select id="region" type="text" class="form-control validate[required]" data-errormessage-value-missing="Region is required!" data-prompt-position="bottomRight" name="region">
                                <option value="">-- Select Region -- </option>
                                @foreach(Region::where('active', 1)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>District <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                            <select id="district" type="text" class="form-control validate[required]" data-errormessage-value-missing="District is required!" data-prompt-position="bottomRight" name="district"

                            ></select>
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Street</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Street is required!" data-prompt-position="bottomRight" name="street"  id="street" />
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            <label>Location</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Location is required!" data-prompt-position="bottomRight" name="location"  id="location" />
                        </div>

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                    
                            
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                        </div>

                    </div>    
                    <div class="col-md-6">

                        <div class="form-group">
                    
                            <label>Profile Picture</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default" data-errormessage-value-missing="Logo is required!" data-prompt-position="bottomRight" title="Select Logo Image"

                             />
                             <button class="btn btn-success"><i class="fa fa-camera"></i> Take Photo</button>
                             <button class="btn btn-danger"><i class="fa fa-facebook"></i> Attach From Social Media</button>
                             <hr/>
                            <div id="logo-placeholder"></div>
                            
                        </div>

                    </div>    
                    <div class="col-md-3">

                        <div class="form-group">
                    
                        </div>

                    </div>    
                </div>
                <hr/>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group" onclick="alert(3)">
                            
                                
                                  <label>
                                    <input type="checkbox" onclick="checkIt()" />
                                    Subscribe To Social Media Updates
                                  </label>

                                  
                                
                               
                        </div>

                        
                    </div>    
                     
                </div>

                <div style="display:none" id="socialaccounts">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>facebook ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="facebook is required!" data-prompt-position="bottomRight" name="facebook"  id="facebook" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Instagram ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="instagram is required!" data-prompt-position="bottomRight" name="instagram"  id="instagram" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Whatsapp ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Whatapp is required!" data-prompt-position="bottomRight" name="whatsapp"  id="whatsapp" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Skype ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Skype is required!" data-prompt-position="bottomRight" name="skype"  id="skype" />
                            </div>

                        </div>    
                    </div>

                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Twitter ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="facebook is required!" data-prompt-position="bottomRight" name="facebook"  id="facebook" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Telegram ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="instagram is required!" data-prompt-position="bottomRight" name="instagram"  id="instagram" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>WeChat ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Whatapp is required!" data-prompt-position="bottomRight" name="whatsapp"  id="whatsapp" />
                            </div>

                        </div>    
                        <div class="col-md-3">

                            <div class="form-group">
                        
                                <label>Google++ ID</label>
                                <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Skype is required!" data-prompt-position="bottomRight" name="skype"  id="skype" />
                            </div>

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

@include('partials.scripts._customers');



@stop
