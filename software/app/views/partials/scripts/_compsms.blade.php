@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

    $('#saveSms').on('click', function(){
        
        var registerForm =  $("#branchForm").validationEngine('validate');
        if(registerForm){
            data = Wateja.serializeData(branchForm);
            Wateja.applyOpacity(branchForm);
            Wateja.talkToServer('{{route("compsms.store")}}', data).then(function(res){
                Wateja.refreshViewFromServer('branchesArea', '{{route("compsms.refresh")}}');
                Wateja.removeOpacity(branchForm);
                if(res.error){
                    Wateja.showFeedBack(branchForm, res.msg, res.error);
                }else{
                    
                    $('#branchForm')[0].reset();
                    Wateja.showFeedBack(branchFBk, res.msg, res.error);                                                                                                                                                                                                                                                                                                 
                }
            });
        }
    }); 

});
</script>