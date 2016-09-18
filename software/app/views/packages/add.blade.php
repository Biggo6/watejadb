@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Packages</a></li><li class="active">Add Packages</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Package Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Package Name</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Package name is required!" data-prompt-position="bottomRight" name="packagename"  id="packagename"

                    />
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                            <label for="">Status</label>
                            <select id="packagestatus" name="packagestatus" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>

               <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Duration (days)</label>
                            <input type="text" class="form-control validate[required, custom[number]]" data-errormessage-value-missing="Duration is required!" data-prompt-position="bottomRight" name="duration"  id="duration"

                    />
                        </div>
                        
                    </div>
                </div>

               
                <hr/>
                <br/>

                <button type="button"   register="save" class="btn btn-primary register">Save</button>
                <button type="button"   register="saveandnew" class="btn btn-success register">Save & New</button>
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


</div>

@include('partials.scripts._packages'); 



@stop