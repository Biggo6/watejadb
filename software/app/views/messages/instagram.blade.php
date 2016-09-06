@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<style type="text/css">
.tokenize-sample { width: 467px; height: 50px }
</style>




<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="col-md-4">
            		<h4><i class="fa fa-edit"></i> Composer New SMS <a data-modal="new-message" class="md-trigger"> <label  style="cursor: pointer" class="label label-success pull-right"><i class="fa fa-plus"></i> Group SMS</label></a></h4>
            		<hr/>
            		<form action="" id="instaForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Receivers</label>
                            <br/>
                            <select id="tokenize" name="instaRecs" multiple="multiple" class="tokenize-sample validate[required]" data-errormessage-value-missing="Customers is required!" data-prompt-position="bottomRight">
                            	<?php $customers = Customer::where('added_by', Auth::user()->id)->where('instagram', '!=', '')->get(); ?>
                            	@foreach($customers as $c)
							    <option value="{{$c->id}}">{{$c->firstname}} {{$c->lastname}} @{{{$c->instagram}}}</option>
							    @endforeach
							</select>
                        </div>
                        <div class="form-group">
                            <label for="">Compose SMS</label>
                            <textarea class="form-control validate[required]" data-errormessage-value-missing="SMS is required!" data-prompt-position="bottomRight" id="instaSMS" name="instaSMS" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                        	<label>Attach Image</label><br/>
                            <input type="file" id="logo" name="logo" class="btn btn-default validate[required]" data-errormessage-value-missing="Logo is required!" data-prompt-position="bottomRight" title="Select Logo Image"

                             />
                             <hr/>
                            <div id="logo-placeholder"></div>
                        </div>
                        
                        <button type="button" id="instaSend" class="btn btn-danger">SEND DM</button>
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

    	<div class="md-modal md-slide-stick-top"  id="new-message" style="width:700px">
			<div class="md-content" style="background-color: #f5f5f5">
			<div class="md-close-btn"><a class="md-close"><i class="fa fa-times"></i></a></div>
				<h3><strong>New</strong> Message</h3>
				<div>
					<form role="form">
						<div class="form-group">
                            <label for="">Groups</label>
                            <br/>
                            <select id="tokenize-group" multiple="multiple" class="tokenize-sample">
                            	<?php $groups = Group::where('added_by', Auth::user()->id)->get(); ?>
                            	@foreach($groups as $c)
							    <option value="{{$c->id}}">{{{$c->group_name}}}</option>
							    @endforeach
							</select>
                        </div>
						<div class="form-group">
							<label>Compose SMS</label>
							<textarea class="summernote-small form-control" rows="6"></textarea>
						</div>
						<label>Attach Image</label><br/>
                            <input type="file" id="logo-2" name="logo-2" class="btn btn-default" data-errormessage-value-missing="Logo is required!" data-prompt-position="bottomRight" title="Select Logo Image"

                             />
                             <hr/>
                            <div id="logo-placeholder-2"></div>
							<div class="row">
							<div class="col-xs-8">
								<button type="submit" class="btn btn-success btn-sm">Send DM</button>
							</div>
							<div class="col-xs-4">
								
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>


</div>



@stop



@section('specific_js_libs')




@stop