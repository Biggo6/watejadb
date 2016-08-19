@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">
$(function(){

	

	$('#buzSave').click(function(){
		
		var registerForm =  $("#buzForm").validationEngine('validate');

        var data = Wateja.getAllFormData(buzForm);

		if(registerForm){
			Wateja.applyOpacity(buzForm);
            Wateja.talkToServer("{{route('business.store')}}", data).then(function(res){
                Wateja.removeOpacity(buzForm);

                if(res.error){
                    Wateja.showFeedBack(buzForm, res.msg, res.error);
                }else{
                    Wateja.unSet(buz_name)
                    Wateja.showFeedBack(buzForm, res.msg, res.error);                                                                                                                                                                                                                                                                                                  
                }
            });
		}

	});



});
</script>