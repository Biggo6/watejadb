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
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Username is required!" data-prompt-position="bottomRight" name="username"  id="username"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Primary Email</label>
                            <input id="email" type="text" class="form-control validate[required,custom[email]]" data-errormessage-value-missing="Email is required!" data-prompt-position="bottomRight" name="email"

                             />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Firstname</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Firstname is required!" data-prompt-position="bottomRight" name="firstname"  id="firstname"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Lastname</label>
                            <input id="lastname" type="text" class="form-control validate[required]" data-errormessage-value-missing="Lastname is required!" data-prompt-position="bottomRight" name="lastname"

                             />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input type="password" class="form-control validate[required,funcCall[checkPassMatch[cpassword]]]" data-errormessage-value-missing="Password is required!" data-prompt-position="bottomRight" name="password"  id="password"

                    />
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <input id="cpassword" type="password" class="form-control validate[required,funcCall[checkPassMatch[password]]]" data-errormessage-value-missing="Confirm Password is required!" data-prompt-position="bottomRight" name="cpassword"

                             />
                        </div>
                    </div>
                </div>

                
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Company</label>
                            <select id="company" type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="company"

                            >
                            <option value="">-- Select Company -- </option>
                            @if(Auth::user()->role_id != 1)
                            @foreach(Company::where('id', Auth::user()->company_id)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                             @else
                             @foreach(Company::all() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                             @endif 
                               
                        </select><br/>
                        <div class="form-group">
                            <label for="">Company Branch <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                            <select id="branch" type="text" class="form-control validate[required]" data-errormessage-value-missing="Branch is required!" data-prompt-position="bottomRight" name="branch"

                            ></select>
                        </div>
                           {{--  <label>Sub-Business</label>
                            <select id="sub-business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Sub-Business is required!" data-prompt-position="bottomRight" name="sub-business"

                            ></select> --}}
                        </div>
                        <div class="col-sm-6">
                            <label>Profile Picture</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default" data-errormessage-value-missing="Profile Picture is required!" data-prompt-position="bottomRight" title="Select Profile Image"

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
                            <select id="role" type="text" class="form-control validate[required]" data-errormessage-value-missing="Role is required!" data-prompt-position="bottomRight" name="role">
                                <option value="">--Select Role--</option>
                                @if(Auth::user()->role_id == 1) 
                                @foreach(Role::all() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                                @else
                                @foreach(Role::all() as $r)
                                    @if($r->name != "superadmin")
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endif
                                @endforeach
                                @endif
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

@include('partials.scripts._user');



@stop
