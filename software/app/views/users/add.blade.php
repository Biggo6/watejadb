@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Users</a></li><li class="active">Add User</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>User Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Username</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="companyname"  id="companyname"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Primary Email</label>
                            <input id="tin" type="text" class="form-control validate[required,custom[number]" data-errormessage-value-missing="TIN is required!" data-prompt-position="bottomRight" name="tin"

                             />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Firstname</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="companyname"  id="companyname"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Lastname</label>
                            <input id="tin" type="text" class="form-control validate[required,custom[number]" data-errormessage-value-missing="TIN is required!" data-prompt-position="bottomRight" name="tin"

                             />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="companyname"  id="companyname"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <input id="tin" type="text" class="form-control validate[required,custom[number]" data-errormessage-value-missing="TIN is required!" data-prompt-position="bottomRight" name="tin"

                             />
                        </div>
                    </div>
                </div>

                
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Company</label>
                            <select id="business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Business is required!" data-prompt-position="bottomRight" name="business"

                            >
                            <option value="">-- Select Company -- </option>
                            @foreach(Company::all() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                        </select><br/>
                           {{--  <label>Sub-Business</label>
                            <select id="sub-business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Sub-Business is required!" data-prompt-position="bottomRight" name="sub-business"

                            ></select> --}}
                        </div>
                        <div class="col-sm-6">
                            <label>Profile Picture</label><br/>
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
                            <label>Role</label>
                            <select class="form-control">
                                <option>--Select Role--</option>
                            </select>
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
