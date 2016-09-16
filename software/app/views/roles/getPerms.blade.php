@if($role == 1)

<div class="form-group well" >
    <label id="perm" for="">Permissions</label>
    
    <div id="jstree" data-jstree='{"opened":true,"selected":true}'>
	    <ul data-jstree='{"disabled":true}'>
	      
	      <?php $modules = Module::where('status', 1)->get();  ?>
	      @if(count($modules))
	      	@foreach($modules as $m)
		      <li data-jstree='{"disabled":true}' id="{{$m->name}}_{{$m->name}}_{{$m->id}}" class="jstree-open"><a class="jstree-clicked">{{$m->name}}</a>

		      	
		        <ul>
		        	@foreach(Permission::where('module_id', $m->id)->get() as $p)		

		        		
		          			<li data-jstree='{"disabled":true}'  id="{{$m->name}}_{{$p->name}}_{{$p->id}}"><a class="jstree-clicked">{{$p->name}} {{$m->name}}</a></li>
		          		
		          	@endforeach	
		        </ul>
		        
		      
		      </li>
		    @endforeach  
	      @endif
	      
	    </ul>
	 </div>
</div>


@else

<div class="form-group well" >
    <label id="perm" for="">Permissions</label>
    
    <div id="jstree" data-jstree='{"opened":true,"selected":true}'>
	    <ul>
	      
	      <?php $modules = Module::where('status', 1)->get();  ?>
	      @if(count($modules))
	      	@foreach($modules as $m)
		      <li  id="{{$m->name}}_{{$m->name}}_{{$m->id}}" class="jstree-open">{{$m->name}}

		      	
		        <ul>
		        	@foreach(Permission::where('module_id', $m->id)->get() as $p)		

		        		<?php

		        			$c = RolePerm::where('role_id', $role)->where('permission_id', $p->id)->count();

		        		?>
		        		@if($c)
		          			<li   id="{{$m->name}}_{{$p->name}}_{{$p->id}}"><a class="jstree-clicked">{{$p->name}} {{$m->name}}</a></li>
		          		@else
		          			<li   id="{{$m->name}}_{{$p->name}}_{{$p->id}}"><a >{{$p->name}} {{$m->name}}</a></li>
		          		@endif
		          	@endforeach	
		        </ul>
		        
		      
		      </li>
		    @endforeach  
	      @endif
	      
	    </ul>
	 </div>
</div>

<hr/>

<button class="btn btn-danger"><i class="fa fa-save"></i> Save Changes</button>

@endif

<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>

<script src="{{url('jstree/jstree.js')}}"></script> 

<script type="text/javascript">
$(function(){

	$("#jstree").prop('disabled',true);

	$('#jstree').jstree({
	  
	  "checkbox" : {
	    "keep_selected_style" : false
	  },
	  "plugins" : [ "wholerow", "checkbox" ]
	});
	$('#jstree').on("changed.jstree", function (e, data) {
      roles = (data.selected);
    });
});
</script>