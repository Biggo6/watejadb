
<span style="cursor: pointer"  class="label label-primary" onclick="tryToEdit(this)" url="{{$url1}}" title="Edit This Record" rowid="{{$rId}}">
	<i class="fa fa-edit"></i>
</span>
&nbsp;
@if($config != "modules")
<span style="cursor: pointer" class="label label-danger" onclick="tryToDelete(this)" url="{{$url}}" title="Delete This Record" rowid="{{$rId}}">
	<i class="fa fa-trash"></i>
</span>
@else
	<?php 
		$sys = Module::find($rId)->system;
	?>
	@if($sys != 1)
		<span style="cursor: pointer" class="label label-danger" onclick="tryToDelete(this)" url="{{$url}}" title="Delete This Record" rowid="{{$rId}}">
			<i class="fa fa-trash"></i>
		</span>
	@endif
@endif

@include('partials.scripts._dependencies')

@if($config == "permissions")
<script type="text/javascript">
function tryToDelete(el){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("permissions.refresh")}}');
			});
		}
}

function tryToEdit(el){

	

}
</script>
@endif

@if($config == "modules")

<script type="text/javascript">
function tryToDelete(el){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(moduleFBk, res.msg, false);
				Wateja.refreshViewFromServer('modulesArea', '{{route("modules.refresh")}}');
			});
		}
}

function tryToEdit(el){

	var id = (Wateja.getProp(el, 'rowid'));
	var url = $(el).attr('url');
			
	Wateja.getParent(el,2).css('opacity', 0.2);
	Wateja.talkToServer(url, {id:id}).then(function(res){
		Wateja.getParent(el,2).css('opacity', 1);
		$('#moduleFormArea').html(res).hide().fadeIn(); 
	});

}
</script>


@endif



@if($config == "companies")

<script type="text/javascript">
function tryToDelete(el){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("company.refresh")}}');
			});
		}
}

function tryToEdit(el){

	var id = (Wateja.getProp(el, 'rowid'));
	var url = $(el).attr('url');
			
	Wateja.getParent(el,2).css('opacity', 0.2);
	Wateja.talkToServer(url, {id:id}).then(function(res){
		$('#manage-area').html(res).hide().fadeIn(); 
	});


}
</script>

@endif

@if($config == "business")
<script type="text/javascript">

function tryToDelete(el){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("business.refresh")}}');
			});
		}
}

function tryToEdit(el){

	var id = (Wateja.getProp(el, 'rowid'));
	var url = $(el).attr('url');
			
	Wateja.getParent(el,2).css('opacity', 0.2);
	Wateja.talkToServer(url, {id:id}).then(function(res){
		$('#manage-area').html(res).hide().fadeIn(); 
	});


}

</script>
@endif

@if($config == 'districts')

<script type="text/javascript">

function tryToDelete(el){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(districtFBk, res.msg, false);
				Wateja.refreshViewFromServer('districtsArea', '{{route("districts.refresh")}}');
			});
		}
}

function tryToEdit(el){

	var id = (Wateja.getProp(el, 'rowid'));
	var url = $(el).attr('url');
			
	Wateja.getParent(el,2).css('opacity', 0.2);
	Wateja.talkToServer(url, {id:id}).then(function(res){
		Wateja.getParent(el,2).css('opacity', 1);
		$('#districtFormArea').html(res).hide().fadeIn(); 
	});


}

</script>

@endif

@if($config == "regions")

<script type="text/javascript">

var editMode = Wateja.edit;

function tryToDelete(el){

	
	if(!editMode){
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
			});
		}
	}else{
		if(Wateja.confirmDialog('Are you sure')){
			var id = (Wateja.getProp(el, 'rowid'));
			var url = $(el).attr('url');
			
			Wateja.getParent(el,2).css('opacity', 0.2);
			Wateja.talkToServer(url, {id:id}).then(function(res){
				Wateja.showFeedBack(regionFBk, res.msg, false);
				Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
				Wateja.refreshViewFromServer('regionFormArea', '{{route("app.configuration.refreshAddRegion")}}');
			});
		}
		
	}

	
}

function tryToEdit(el){

	var id = (Wateja.getProp(el, 'rowid'));
	editMode = true;
	var url = $(el).attr('url');
	Wateja.applyOpacity(regionFormArea);
	Wateja.getParent(el,2).css('opacity', 0.2);
	Wateja.talkToServer(url, {id:id}, false, 'get').then(function(res){
		Wateja.removeOpacity(regionFormArea);
		Wateja.getParent(el,2).css('opacity', 1);
		$(regionFormArea).html(res).hide().fadeIn();
	});


}

$(function(){

});
</script>

@endif