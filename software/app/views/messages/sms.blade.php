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
            	<div class="col-md-3">
            		<h4><i class="fa fa-edit"></i> Composer New SMS <label style="cursor: pointer" class="label label-success pull-right"><i class="fa fa-plus"></i> Group SMS</label></h4>
            		<hr/>
            		<div class="panel panel-primary">
            			<div class="panel-heading">
            				<h3 class="panel-title"></h3>
            			</div>
            			<div class="panel-body">
            				<div class="list-group menu-message">
							  <a href="inbox.html" class="list-group-item active"><i class="icon-inbox"></i> Inbox <span class="badge pull-right">4</span></a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Draft <span class="badge bg-green-1 pull-right">1</span></a>
							 
							  <a href="#fakelink" class="list-group-item"><i class="icon-export"></i> Sent</a>
							  <a href="#fakelink" class="list-group-item"><i class="icon-cup"></i> Trash <span class="badge bg-lightblue-1 pull-right">1</span></a>
					</div>
            			</div>
            		</div>
            		
            	</div>
            	<div class="col-md-9">
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