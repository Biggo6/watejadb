@include('partials.scripts._dependencies')
@include('partials.scripts._jsImagePreview')
<script type="text/javascript">
$(function(){

	

	$('.register').click(function(){
		var register = $(this).attr('register');
		var registerForm =  $("#form_reg").validationEngine('validate');
		if(registerForm){
			alert(register)
		}
	});


    $('#region').on('change', function(){
        var region = $(this).val();
        if(region != ""){
            Wateja.talkToServer('{{route("company.getDistricts")}}', {region_id : region}).then(function(res){
            	$('#district').html(res);
            });
        }else{
        		$('#district').html('');
        }
    });



});
</script>