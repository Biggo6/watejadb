<span style="cursor: pointer"  class="label label-primary" onclick="tryToEdit(this)" title="Edit This Record" rowid="{{$rId}}">
	<i class="fa fa-edit"></i>
</span>
&nbsp;
<span style="cursor: pointer" class="label label-danger" onclick="tryToDelete(this)" title="Delete This Record" rowid="{{$rId}}">
	<i class="fa fa-trash"></i>
</span>

@include('partials.scripts._dependencies')

<script type="text/javascript">

function tryToDelete(el){
	
	var editMode = Wateja.edit;

	if(!editMode){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer('{{$url}}', {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
			});
		}
	}else{
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer('{{$url}}', {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
				Wateja.refreshViewFromServer('regionFormArea', '{{route("app.configuration.refreshAddRegion")}}');
			});
		}
		
	}

	
}

function tryToEdit(el){
	var id = (Wateja.getProp(el, 'rowid'));
	Wateja.edit = true;
	Wateja.applyOpacity(regionFormArea);
	Wateja.talkToServer("{{$url1}}", {id:id}, false, 'get').then(function(res){
		Wateja.removeOpacity(regionFormArea);
		$(regionFormArea).html(res).hide().fadeIn();
	});
}

$(function(){

});
</script>