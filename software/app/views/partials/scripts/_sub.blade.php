@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">



$(function(){

	

	$('.register').click(function(){
		var register = $(this).attr('register');
		var registerForm =  $("#form_reg").validationEngine('validate');
		if(registerForm){
            
            var isFileUpload = false;
            
            data = Wateja.serializeData(form_reg);


            Wateja.applyOpacity(form_reg);
            Wateja.talkToServer('{{route("subscription.store")}}', data, isFileUpload).then(function(res){
                
                Wateja.removeOpacity(form_reg);
                if(res.error){
                    Wateja.showFeedBack(form_reg, res.msg, res.error);
                }else{
                    if(register == "save"){
                        window.location = "{{route('subscription.redirectWith')}}";
                    }else{
                        $('#form_reg')[0].reset();
                        $('#lic').val("{{Uuid::generate(1,'00:11:22:33:44:55')}}");
                        Wateja.showFeedBack(form_reg, res.msg, res.error);
                    }
                                                                                                                                                                                                                                                                                                                      
                }
            });
            
		}
	});


     $('#company').on('change', function(){
        var company = $(this).val();
        if(company != ""){
            $('#branch').prop('disabled', true);
            $('#ld').show();
            Wateja.talkToServer('{{route("company.getBranches")}}', {company_id : company}).then(function(res){
                $('#branch').prop('disabled', false);
                $('#ld').hide();
                $('#branch').html(res);
            });
        }else{
                $('#branch').html('');
        }
    });



});
</script>