@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Subscriptions</a></li><li class="active">Add Subscription</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Subscription Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                

                
                <div class="form-group">
                    <label>Package Name:</label>
                    <select class="form-control validate[required]" data-errormessage-value-missing="Package Name is required!" data-prompt-position="bottomRight" name="package" id="package">
                        <option value="">-- Select Package -- </option>
                         @foreach(Package::where('active', '!=', 0)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->package}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                            <label for="">Status</label>
                            <select id="substatus" name="substatus" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Company</label>
                            <select id="company" type="text" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight" name="company"

                            >
                            <option value="">-- Select Company -- </option>
                            @foreach(Company::where('id', '!=', 0)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                            @endforeach
                        </select><br/>
                        
                           {{--  <label>Sub-Business</label>
                            <select id="sub-business" type="text" class="form-control validate[required]" data-errormessage-value-missing="Sub-Business is required!" data-prompt-position="bottomRight" name="sub-business"

                            ></select> --}}
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="">Company Branch <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                            <select id="branch" type="text" class="form-control validate[required]" data-errormessage-value-missing="Branch is required!" data-prompt-position="bottomRight" name="branch"

                            ></select>
                        </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label>Licience:</label>
                    <input id="lic"  type="text"  class="form-control validate[required]" data-errormessage-value-missing="Licence is required!" data-prompt-position="bottomRight" value="{{Uuid::generate(1,'00:11:22:33:44:55')}}" name="lic" />
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

@include('partials.scripts._sub');



@stop
