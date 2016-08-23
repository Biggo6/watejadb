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
            	<div class="col-md-4" id="roleFormArea">
                    <h4><i class="fa fa-plus"></i> Add New Role</h4>
                    <hr/>
                    <form action="" id="roleForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="role_name" id="module_name" class="form-control validate[required]" data-errormessage-value-missing="Role name is required!" data-prompt-position="bottomRight"  placeholder="Enter Role Name">
                        </div>
                        <div class="form-group">
                                        <label for="">Category</label>
                                        <select id="module_cat" name="module_cat" class="form-control validate[required]" data-errormessage-value-missing="Category is required!" data-prompt-position="bottomRight">
                                            <option value="">--- Select Module Category here --</option>
                                            <option value="0">User Defined</option>
                                            <option value="1">System Defined</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select id="module_status" name="module_status" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                        <div class="form-group">
                            <label for="">Permissions</label>
                            
                            <div id="jstree" data-jstree='{"opened":true,"selected":true}'>
							    <ul>
							      
							      <?php $modules = Module::where('status', 1)->get();  ?>
							      @if(count($modules))
							      	@foreach($modules as $m)
								      <li>{{$m->name}}

								      	
								        <ul>
								        	@foreach(Permission::where('module_id', $m->id)->get() as $p)		
								          		<li id="">{{$p->name}} {{$m->name}}</li>
								          	@endforeach	
								        </ul>
								        
								      
								      </li>
								    @endforeach  
							      @endif
							      
							    </ul>
							 </div>
                        </div>
                        
                        <button type="button" id="saveRole" class="btn btn-primary">SAVE</button>
                        <br/>
                        <br/>
                    </form>
                </div>
            </div>

        </div>

    </div>	
</div>

@include('partials.scripts._roles')

@stop

@section('specific_js_libs')




@stop