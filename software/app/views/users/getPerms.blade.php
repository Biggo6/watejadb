
<div class="form-group well">
    <label id="perm" for="">Permissions</label>
    
    <div id="jstree" data-jstree='{"opened":true,"selected":true}'>
	    <ul>
	      
	      <?php $modules = Module::where('status', 1)->get();  ?>
	      @if(count($modules))
	      	@foreach($modules as $m)
		      <li id="{{$m->name}}_{{$m->name}}_0">{{$m->name}}

		      	
		        <ul>
		        	@foreach(Permission::where('module_id', $m->id)->get() as $p)		
		          		<li id="{{$m->name}}_{{$p->name}}_{{$p->id}}">{{$p->name}} {{$m->name}}</li>
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
	$('#jstree').jstree({

	  "checkbox" : {
	    "keep_selected_style" : true
	  },
	  "plugins" : [ "wholerow", "checkbox" ]
	});
	$('#jstree').on("changed.jstree", function (e, data) {
      roles = (data.selected);
    });
});
</script>