<?php

$d = District::find($id);

?>

<h4><i class="fa fa-edit"></i> Edit District</h4>
<hr/>
<form action="" id="districtForm" method="POST" role="form">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" value="{{$d->name}}" name="district_name" id="district_name" class="form-control validate[required]" data-errormessage-value-missing="District name is required!" data-prompt-position="bottomRight"  placeholder="Enter District Name">
    </div>
    <div class="form-group">
        <label for="">Region</label>
        <select id="district_region" name="district_region" class="form-control validate[required]" data-errormessage-value-missing="Region is required!" data-prompt-position="bottomRight">
            <option value="{{Region::find($d->region_id)->id}}">{{Region::find($d->region_id)->name}}</option>
            @foreach(Region::where('id', '!=', $d->region_id) as $r)
                <option value="{{$r->id}}">{{$r->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select id="district_active" name="district_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
            @if($d->active == 1)
            <option value="1">Active</option>
            <option value="0">Block</option>
            @else  
            <option value="0">Active</option>
            <option value="1">Block</option>
            @endif
        </select>
    </div>
    <button type="button" id="updateDistrict" class="btn btn-success">UPDATE</button>
    <a href="{{url('app/configuration/districts')}}"><button type="button" id="cancleDistrict" class="btn btn-danger">CANCEL</button></a>
    <br/>
    <br/>
</form>

@include('partials.scripts._dependencies')
@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
    $('#updateDistrict').on('click', function(){
        
        var rf =  $("#districtForm").validationEngine('validate');
        if(rf){

            Wateja.applyOpacity(districtForm);
            var data = Wateja.getAllFormData(districtForm);
            data.push({"name":"district_id", "value": "{{$d->id}}"})
            Wateja.talkToServer("{{route('app.configuration.updateDistrict')}}", data).then(function(res){
                Wateja.removeOpacity(districtForm);
                if(res.error){
                    Wateja.showFeedBack(districtForm, res.msg, res.error, "");
                }else{
                    Wateja.showFeedBack(districtFBk, res.msg, res.error, "");

                }
            });
        }
    });
});
</script>