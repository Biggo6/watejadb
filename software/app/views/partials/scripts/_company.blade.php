@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">
$(function(){

	

	$('.register').click(function(){
		var register = $(this).attr('register');
		var registerForm =  $("#form_reg").validationEngine('validate');
		if(registerForm){
            
            var isFileUpload = false;
            var data;
            if(Wateja.isFileValueSetted(logo) != undefined){
                var arr  = Wateja.serializeData(form_reg);
                var arr2 = ["logo"];
                isFileUpload = true;
                data = Wateja.prepareFormData(arr, arr2);
            }else{
                data = Wateja.serializeData(form_reg);
            }

            Wateja.applyOpacity(form_reg);
            Wateja.talkToServer('{{route("company.store")}}', data, isFileUpload).then(function(res){
                
                Wateja.removeOpacity(form_reg);
                if(res.error){
                    Wateja.showFeedBack(form_reg, res.msg, res.error);
                }else{
                    if(register == "save"){
                        window.location = "{{route('company.redirectWith')}}";
                    }else{
                        $('#form_reg')[0].reset();
                        Wateja.showFeedBack(form_reg, res.msg, res.error);
                    }
                                                                                                                                                                                                                                                                                                                      
                }
            });
            
		}
	});


    $('#region').on('change', function(){
        var region = $(this).val();
        if(region != ""){
            $('#district').prop('disabled', true);
            $('#ld').show();
            Wateja.talkToServer('{{route("company.getDistricts")}}', {region_id : region}).then(function(res){
            	$('#district').prop('disabled', false);
                $('#ld').hide();
                $('#district').html(res);
            });
        }else{
        		$('#district').html('');
        }
    });



});
</script>