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
                    <div class="col-md-3"></div>    
                    <div class="col-md-3"></div>    
                    <div class="col-md-3"></div>    
                    <div class="col-md-3"></div>    
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
