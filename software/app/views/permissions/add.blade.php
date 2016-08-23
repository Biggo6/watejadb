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
            	<div class="col-md-4" id="regionFormArea">
                    <h4><i class="fa fa-plus"></i> Add New Permission</h4>
                    <hr/>
                    <form action="" id="buzForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Module</label>
                            <select id="region" type="text" class="form-control validate[required]" data-errormessage-value-missing="Region is required!" data-prompt-position="bottomRight" name="region">
                                <option value="">-- Select Module -- </option>
                                @foreach(Module::where('status', 1)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="perm_name" id="perm_name" class="form-control validate[required]" data-errormessage-value-missing="Permission name is required!" data-prompt-position="bottomRight"  placeholder="Enter Permission Name">
                        </div>
                        <div class="form-group">
                            <label for="">Access Route Link</label>
                            <select id="perm_route" name="perm_route" class="form-control validate[required]" data-errormessage-value-missing="Access Route is required!" data-prompt-position="bottomRight">
                                
                                <?php $routeCollection = Route::getRoutes(); ?>

								<?php foreach ($routeCollection as $value): ?> 
								    
								    <option>{{$value->getPath()}}</option>
							
							    <?php endforeach; ?>	    
								

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select id="buz_active" name="perm_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
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


@stop

@section('specific_js_libs')




@stop