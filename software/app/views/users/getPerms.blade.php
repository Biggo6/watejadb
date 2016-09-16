<?php

$role_id = User::find($uid)->role_id;

?>


<div class="form-group well" >
    <label id="perm" for="">Permissions</label>
    
    <div id="jstree" data-jstree='{"opened":true,"selected":true}'>
	    <ul>
	      
	      <?php $modules = Module::where('status', 1)->get();  ?>
	      @if(count($modules))
	      	@foreach($modules as $m)
		      <li data-jstree='{"disabled":true}' id="{{$m->name}}_{{$m->name}}_{{$m->id}}" class="jstree-open">{{$m->name}}

		      	
		        <ul>
		        	@foreach(Permission::where('module_id', $m->id)->get() as $p)		

		        		<?php

		        			$c = RolePerm::where('role_id', $role_id)->where('permission_id', $p->id)->count();

		        		?>
		        		@if($c)
		          			<li   id="{{$m->name}}_{{$p->name}}_{{$p->id}}"><a class="jstree-clicked">{{$p->name}} {{$m->name}}</a></li>
		          		@else
		          			<li data-jstree='{"disabled":true}'  id="{{$m->name}}_{{$p->name}}_{{$p->id}}"><a >{{$p->name}} {{$m->name}}</a></li>
		          		@endif
		          	@endforeach	
		        </ul>
		        
		      
		      </li>
		    @endforeach  
	      @endif
	      
	    </ul>
	 </div>
</div>

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