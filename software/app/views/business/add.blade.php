@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li><a href="#">Manage Business</a></li><li class="active">Add Business</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="col-md-4" id="regionFormArea">
                    <h4><i class="fa fa-plus"></i> Add New Business</h4>
                    <hr/>
                    <form action="" id="buzForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="buz_name" id="buz_name" class="form-control validate[required]" data-errormessage-value-missing="Business name is required!" data-prompt-position="bottomRight"  placeholder="Enter Business Name">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select id="buz_active" name="buz_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                        <button type="button" id="buzSaveNew" class="btn btn-primary">SAVE</button>
                        <button type="button" id="buzSave" class="btn btn-success">SAVE & NEW</button>
                        <br/>
                        <br/>
                    </form>
                </div>
            </div>

        </div>

    </div>	
</div>

@include('partials.scripts._buz')

@stop

@section('specific_js_libs')




@stop