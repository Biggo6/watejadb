<?php

$b = Business::find($id);

?>


<div class="col-md-6" id="regionFormArea">
    <h4><i class="fa fa-edit"></i> Edit Business</h4>
    <hr/>
    <form action="" id="buzForm" method="POST" role="form">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="buz_name" id="buz_name" class="form-control validate[required]" data-errormessage-value-missing="Business name is required!" data-prompt-position="bottomRight" value="{{$b->name}}"  placeholder="Enter Business Name">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select id="buz_active" name="buz_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                @if($b->active == 1)
                <option value="1">Active</option>
                <option value="0">Block</option>
                @else
                <option value="0">Block</option>
                <option value="1">Active</option>
                @endif
            </select>
        </div>
        <button type="button" id="buzUpdate" class="btn btn-primary">SAVE</button>
        <button type="button" id="buzCancel" class="btn btn-danger">CANCEL</button>
        <br/>
        <br/>
    </form>
</div>


@include('partials.scripts._dependencies')
@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
    $('#buzCancel').on('click', function(){
        Wateja.applyOpacity(regionFormArea)
        Wateja.refreshViewFromServer('manage-area', '{{route("business.refresh")}}');
    });
    $('#buzUpdate').click(function(){
        var registerForm =  $("#buzForm").validationEngine('validate');

        var data = Wateja.getAllFormData(buzForm);
        data.push({"name":"bid", "value":"{{$id}}"});

        if(registerForm){
            Wateja.applyOpacity(buzForm);
            Wateja.talkToServer("{{route('business.update')}}", data).then(function(res){
                Wateja.removeOpacity(buzForm);

                if(res.error){
                    Wateja.showFeedBack(buzForm, res.msg, res.error);
                }else{
                   window.location = '{{route("business.redirectWith")}}';                                                                                                                                                                                                                                                                                                
                }
            });
        }
    });
});
</script>