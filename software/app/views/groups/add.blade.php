@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Groups</a></li><li class="active">Add Group</li>
@stop

@section('content')

<div class="row top-summary">

<div class="col-sm-6 portlets ui-sortable">
    <div class="widget">
        <div class="widget-header transparent">
            <h2><strong>Group Registration</strong> Form <span id="loader" style="display:none" class="pull-right"><img src="{{url('images/loader.gif')}}"></span></h2>

        </div>
        <hr/>



        <div class="widget-content padding">
            <form role="form" id="form_reg"  class="bv-form">

                <div id="fidq" style="display:none" class="alert alert-success"><i class="fa fa-check"></i> Successfully Added</div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Group Name</label>
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Group name is required!" data-prompt-position="bottomRight" name="groupname"  id="groupname"

                    />
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                            <label for="">Status</label>
                            <select id="groupstatus" name="groupstatus" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7" >
                            <label>Customers / Members</label>
                            <?php

                                $customers = Customer::where('added_by', Auth::user()->id)->get();
                                $disabled  = (count($customers) == 0) ? 'disabled' : ''; 

                             ?>
                            <div id="cux">
                                @if(count($customers))
                                @foreach($customers as $c)
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" value="{{$c->id}}" name="customers[]">
                                        {{$c->firstname}} {{$c->lastname}} | {{$c->phone}}
                                      </label>
                                    </div>
                                @endforeach
                                @else
                                    <div class="alert alert-danger"><i class="fa fa-warning"></i> Please add Customers first!</div>
                                @endif
                            </div>
                            
                        </div>
                        <div class="col-md-5" style="display:none">
                            <label>Group Icon</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default" data-errormessage-value-missing="Profile Picture is required!" data-prompt-position="bottomRight" title="Select  Image"

                             />
                             <hr/>
                            <div id="logo-placeholder"></div>
                        </div> 
                        
                    </div>
                </div>

               
                <hr/>
                <br/>

                <button type="button" {{$disabled}}  register="save" class="btn btn-primary register">Save</button>{{-- 
                <button type="button" {{$disabled}}  register="saveandnew" class="btn btn-success register">Save & New</button> --}}
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


</div>

@include('partials.scripts._groups');



@stop