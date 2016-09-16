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
		      <li  id="{{$m->name}}_{{$m->name}}_0" class="jstree-open">{{$m->name}}

		      	
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

<button class="btn btn-danger" id="saveRole"><i class="fa fa-save"></i> Save Changes</button>

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

	$('#saveRole').on('click', function(){
		var role_ids = [];
		
		for(i=0; i<(roles).length;i++){
			var role_id = parseInt((roles[i]).split('_')[2]);
			if(role_id != 0){
				role_ids.push(role_id);
			}
		}

		if(role_ids.length == 0){
			$('#jstree').css('background-color', '#F2DEDE').delay(200).fadeOut('normal', function(){
				$(this).fadeIn('normal', function(){
					$(this).css('background-color', '');
				});
			});
		}else{
			var conf  = confirm("Are you sure");
			if(conf){
				$('#jstree').css('opacity', 0.2);
				$.post("{{route('roles.update')}}", {role:'{{$role}}', role_ids : role_ids}, function(res){
					console.log(res)
					$('#jstree').css('opacity', 1);
					alert('Successfully update');
					window.location  = "";
				});
			}
		}
	});	


});
</script>