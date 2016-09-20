@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

    $('#saveBranch').on('click', function(){
        
        var registerForm =  $("#branchForm").validationEngine('validate');
        if(registerForm){
            data = Wateja.serializeData(branchForm);
            Wateja.applyOpacity(branchForm);
            Wateja.talkToServer('{{route("branches.store")}}', data).then(function(res){
                Wateja.refreshViewFromServer('branchesArea', '{{route("branches.refresh")}}');
                Wateja.removeOpacity(branchForm);
                if(res.error){
                    Wateja.showFeedBack(branchForm, res.msg, res.error);
                }else{
                    
                    window.location = "";
                    //$('#branchForm')[0].reset();
                    //Wateja.showFeedBack(branchFBk, res.msg, res.error);                                                                                                                                                                                                                                                                                                 
                }
            });
        }
    }); 

});
</script>