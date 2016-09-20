@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

    $('#smsSend').on('click', function(){
        
        var registerForm =  $("#smsForm").validationEngine('validate');
        if(registerForm){

        }
    }); 

});
</script>