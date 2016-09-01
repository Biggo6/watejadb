@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">

function checkPassMatch(field, rules, i, options){
    var a=rules[i+2];
     if((field.val()) != ( $("#"+a).val() ) ){
       return "Password Mismatches"
     }
}

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
            Wateja.talkToServer('{{route("users.store")}}', data, isFileUpload).then(function(res){
                
                Wateja.removeOpacity(form_reg);
                if(res.error){
                    Wateja.showFeedBack(form_reg, res.msg, res.error);
                }else{
                    if(register == "save"){
                        window.location = "{{route('users.redirectWith')}}";
                    }else{
                        $('#form_reg')[0].reset();
                        Wateja.showFeedBack(form_reg, res.msg, res.error);
                    }
                                                                                                                                                                                                                                                                                                                      
                }
            });
            
		}
	});




});
</script>