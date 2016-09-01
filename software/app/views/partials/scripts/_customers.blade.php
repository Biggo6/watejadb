@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">



$(function(){

    var c = 0;
	$('#checx').click(function(){
        var chk = $(this).find('.ios-switch .ios-switch-default .ios-switch-sm').is(':checked');
        if(chk == false){
            c = c + 1;
        }
        if(c == 1){
            $('#socialaccounts').fadeIn();   
        }else{
            $('#socialaccounts').fadeOut(); 
            c = 0;
        }
    });

    $('.datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    }).on('changeDate', function (ev) {
       $('.datepicker').hide();
    });

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
            Wateja.talkToServer('{{route("customers.store")}}', data, isFileUpload).then(function(res){
                
                Wateja.removeOpacity(form_reg);
                if(res.error){
                    Wateja.showFeedBack(form_reg, res.msg, res.error);
                }else{
                    if(register == "save"){
                        window.location = "{{route('customers.redirectWith')}}";
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