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
                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Username is required!" data-prompt-position="bottomRight" name="username"  id="username"

                    />
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7">
                            <label>Customers / Members</label>
                            <?php $customers = Customer::where('added_by', Auth::user()->id)->get(); ?>
                            @foreach($customers as $c)
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="">
                                    {{$c->firstname}} {{$c->lastname}} | {{$c->phone}}
                                  </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-5">
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

                <button type="button"  register="save" class="btn btn-primary register">Save</button>
                <button type="button"  register="saveandnew" class="btn btn-success register">Save & New</button>
                <br/>


                <input type="hidden" value=""></form>
        </div>
    </div>




</div>


</div>

@include('partials.scripts._groups');



@stop