@include('partials.scripts._onlyJquery')
@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

	var roles = [];

	$('#jstree').jstree({

	  "checkbox" : {
	    "keep_selected_style" : true
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
			 var registerForm =  $("#roleForm").validationEngine('validate');
			 if(registerForm){
			 	var data = Wateja.getAllFormData(roleForm);
			 	data.push({"name":"role_ids", "value":role_ids});
			 	Wateja.applyOpacity(roleForm);
            	Wateja.talkToServer("{{route('roles.store')}}", data).then(function(res){
                Wateja.removeOpacity(roleForm);

                if(res.error){
                    Wateja.showFeedBack(roleForm, res.msg, res.error);
                }else{
                   window.location = '{{route("roles.redirectWith")}}';                                                                                                                                                                                                                                                                                            
                }
            });
			 }
		}

	});

});
</script>