<?php

$region = Region::find($id);

?>

<h4><i class="fa fa-edit"></i> Edit Region</h4>
<hr/>
<form action="" id="regionForm" method="POST" role="form">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="region_name" value="{{$region->name}}" id="region_name" class="form-control validate[required]" data-errormessage-value-missing="Region name is required!" data-prompt-position="bottomRight"  placeholder="Enter Region Name">
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select id="region_active" name="region_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
            @if($region->active == 1)
            <option value="1">Active</option>
            <option value="0">Block</option>
            @else
            <option value="0">Block</option>
            <option value="1">Active</option>
            @endif
        </select>
    </div>
    <button type="button" id="upadteRegion" class="btn btn-success">UPDATE</button>
    <a href="{{route('app.configuration.regions')}}"><button type="button" id="cancelRegion_" class="btn btn-danger">CANCEL</button></a>
    <br/>
    <br/>
</form>

@include('partials.scripts._dependencies')

@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
    $('#cancelRegion').on('click', function(){
        Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
        Wateja.refreshViewFromServer('regionFormArea', '{{route("app.configuration.refreshAddRegion")}}');
    });
    $('#upadteRegion').on('click', function(){
        var rf =  $("#regionForm").validationEngine('validate');
        if(rf){

            Wateja.applyOpacity(regionForm);
            var data = Wateja.getAllFormData(regionForm);
            data.push({"name" : "id", "value":"{{$id}}"});
            console.log(data)
            Wateja.talkToServer('{{route("app.configuration.updateRegion")}}', data).then(function(res){
                Wateja.removeOpacity(regionForm);
                Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
                Wateja.unSet(region_name);
                if(res.error){
                    Wateja.showFeedBack(regionForm, res.msg, res.error);
                }else{

                    window.location = '{{route("app.configuration.redirecthRegions")}}';   //                                                                                            Wateja.refreshViewFromServer('regionFormArea', '{{route("app.configuration.refreshAddRegion")}}');                                                                                                                                                                                                     
                }               
            });
        }
    });
});
</script>
