<?php  

$m = Module::find($id);

?>

<h4><i class="fa fa-edit"></i> Edit Module</h4>
<hr/>
<form action="" id="moduleForm" method="POST" role="form">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" value="{{$m->name}}" name="module_name" id="module_name" class="form-control validate[required]" data-errormessage-value-missing="Module name is required!" data-prompt-position="bottomRight"  placeholder="Enter Module Name">
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <select id="module_cat" name="module_cat" class="form-control validate[required]" data-errormessage-value-missing="Category is required!" data-prompt-position="bottomRight">
            @if($m->system == 1)
            <option value="1">System Defined</option>
            <option value="0">User Defined</option>
            @else
            <option value="0">User Defined</option>
            <option value="1">System Defined</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select id="module_status" name="module_status" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
            @if($m->status == 1)
            <option value="1">Active</option>
            <option value="0">Block</option>
            @else
            <option value="0">Block</option>
            <option value="1">Active</option>
            
            @endif
        </select>
    </div>
    <button type="button" id="updateModule" class="btn btn-success">UPDATE</button>
    <a href="{{route('app.configuration.modules')}}"><button type="button" id="" class="btn btn-danger">CANCEL</button></a>
    <br/>
    <br/>
</form>


@include('partials.scripts._dependencies')
@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
    $('#updateModule').on('click', function(){
        
        var rf =  $("#moduleForm").validationEngine('validate');
        if(rf){

            Wateja.applyOpacity(moduleForm);
            var data = Wateja.getAllFormData(moduleForm);
            data.push({"name":"module_id", "value": "{{$m->id}}"})
            Wateja.talkToServer("{{route('modules.update')}}", data).then(function(res){
                Wateja.removeOpacity(moduleForm);

                Wateja.refreshViewFromServer('moduleFormArea', '{{route("modules.refresh")}}');
                
                if(res.error){
                    Wateja.showFeedBack(moduleForm, res.msg, res.error);
                }else{

                    window.location = '{{route("modules.redirectWith")}}';   //                                                                                            Wateja.refreshViewFromServer('regionFormArea', '{{route("app.configuration.refreshAddRegion")}}');                                                                                                                                                                                                     
                }          
            });
        }
    });
});
</script>
