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
            	<div class="col-md-4" id="permFormArea">
                    <h4><i class="fa fa-plus"></i> Add New Permission</h4>
                    <hr/>
                    <form action="" id="permForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Module</label>
                            <select id="perm_module" type="text" class="form-control validate[required]" data-errormessage-value-missing="Module is required!" data-prompt-position="bottomRight" name="perm_module">
                                <option value="">-- Select Module -- </option>
                                @foreach(Module::where('status', 1)->get() as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
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
                            <label for="">Action Name</label>
                            <select id="perm_action_name" name="perm_action_name" class="form-control validate[required]" data-errormessage-value-missing="Action Name is required!" data-prompt-position="bottomRight">
                                <option value="">-- Select Action ---</option>
                                <option value="Add">Can Add /Store</option>
                                <option value="Update">Can Update</option>
                                <option value="View">Can View </option>
                                <option value="Edit">Can Edit</option>
                                <option value="Manage">Can Manage</option>
                                <option value="Refresh">Can Refresh</option>
                                <option value="Redirect">Can Redirect With</option>
                                <option value="Delete">Can Delete</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Status</label>
                            <select id="perm_active" name="perm_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                <option value="1">Active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                        <button type="button" id="permSaveNew" class="btn btn-primary">SAVE</button>
                        <button type="button" id="permSave" class="btn btn-success">SAVE & NEW</button>
                        <br/>
                        <br/>
                    </form>
                </div>
            </div>

        </div>

    </div>	
</div>

@include('partials.scripts._permission')

@stop

@section('specific_js_libs')




@stop