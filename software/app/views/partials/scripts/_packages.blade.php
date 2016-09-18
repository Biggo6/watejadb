@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

	

	$('.register').click(function(){
		var register = $(this).attr('register');
		var registerForm =  $("#form_reg").validationEngine('validate');
		if(registerForm){

            var err = [];
            
            var isFileUpload = false;
            var data;
           
            data = Wateja.serializeData(form_reg);
            



            if(data.length == 2){
                $('#cux').css('background-color', '#F2DEDE').css('padding','3px').delay(200).fadeOut('normal', function(){
                    $(this).fadeIn('normal', function(){
                        $(this).css('background-color', '');
                    });
                });
            }else{
                Wateja.applyOpacity(form_reg);
                Wateja.talkToServer('{{route("packages.store")}}', data, isFileUpload).then(function(res){
                    
                    Wateja.removeOpacity(form_reg);
                    if(res.error){
                        Wateja.showFeedBack(form_reg, res.msg, res.error);
                    }else{
                        if(register == "save"){
                            window.location = "{{route('packages.redirectWith')}}";
                        }else{
                            $('#form_reg')[0].reset();
                            Wateja.showFeedBack(form_reg, res.msg, res.error);
                        }
                                                                                                                                                                                                                                                                                                                          
                    }
                });
            }

            
            
		}
	});





});
</script>