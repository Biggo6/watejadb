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
});
</script>