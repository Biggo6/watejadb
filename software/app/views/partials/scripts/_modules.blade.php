@include('partials.scripts._dependencies')
<script type="text/javascript">
$(function(){

    $('#saveModule').on('click', function(){
        
        var registerForm =  $("#moduleForm").validationEngine('validate');
        if(registerForm){
            data = Wateja.serializeData(moduleForm);
            Wateja.applyOpacity(moduleForm);
            Wateja.talkToServer('{{route("modules.store")}}', data).then(function(res){
                Wateja.refreshViewFromServer('modulesArea', '{{route("modules.refresh")}}');
                Wateja.removeOpacity(moduleForm);
                if(res.error){
                    Wateja.showFeedBack(moduleForm, res.msg, res.error);
                }else{
                    
                    window.location = "";
                    //$('#moduleForm')[0].reset();
                    //Wateja.showFeedBack(moduleFBk, res.msg, res.error);                                                                                                                                                                                                                                                                                                 
                }
            });
        }
    }); 

});
</script>