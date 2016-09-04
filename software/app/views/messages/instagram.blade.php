@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="col-md-4">
            		<h4><i class="fa fa-edit"></i> Composer New SMS <label style="cursor: pointer" class="label label-success pull-right"><i class="fa fa-plus"></i> Group SMS</label></h4>
            		<hr/>
            		<form action="" id="buzForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Receivers</label>

                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Compose SMS</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                        	<label>Attach Image</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default" data-errormessage-value-missing="Logo is required!" data-prompt-position="bottomRight" title="Select Logo Image"

                             />
                             <hr/>
                            <div id="logo-placeholder"></div>
                        </div>
                        
                        <button type="button" id="buzSaveNew" class="btn btn-danger">SEND DM</button>
                        <br/>
                        <br/>
                    </form>
            	</div>
            	<div class="col-md-8">
            		<h4><i class="fa fa-list"></i> Manage Your SMS</h4>
            		<hr/>
            	</div>
            </div>

        </div>

    </div>	
</div>


@stop

@section('specific_js_libs')




@stop