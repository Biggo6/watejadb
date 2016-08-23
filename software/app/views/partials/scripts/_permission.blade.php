@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

    $('#permSaveNew').click(function(){
        
        var registerForm =  $("#permForm").validationEngine('validate');

        var data = Wateja.getAllFormData(permForm);

        if(registerForm){
            Wateja.applyOpacity(permForm);
            Wateja.talkToServer("{{route('permissions.store')}}", data).then(function(res){
                Wateja.removeOpacity(permForm);

                
                if(res.error){
                    Wateja.showFeedBack(permForm, res.msg, res.error);
                }else{
                   window.location = '{{route("permissions.redirectWith")}}';                                                                                                                                                                                                                                                                                                
                }
            });
        }

    });
	

	$('#permSave').click(function(){
		
		var registerForm =  $("#permForm").validationEngine('validate');

        var data = Wateja.getAllFormData(permForm);

		if(registerForm){
			Wateja.applyOpacity(permForm);
            Wateja.talkToServer("{{route('permissions.store')}}", data).then(function(res){
                Wateja.removeOpacity(permForm);

                if(res.error){
                    Wateja.showFeedBack(permForm, res.msg, res.error);
                }else{
                    $('#permForm')[0].reset();
                    Wateja.showFeedBack(permForm, res.msg, res.error);                                                                                                                                                                                                                                                                                                  
                }
            });
		}

	});



});
</script>