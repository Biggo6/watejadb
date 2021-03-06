@include('partials.scripts._dependencies')
@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
	$('#saveRegion').on('click', function(){
		var rf =  $("#regionForm").validationEngine('validate');
		if(rf){

			Wateja.applyOpacity(regionForm);
			var data = Wateja.getAllFormData(regionForm);
			Wateja.logIt(data)
			Wateja.talkToServer('{{route("app.configuration.storeRegion")}}', data).then(function(res){
				Wateja.removeOpacity(regionForm);
				Wateja.refreshViewFromServer('regionsArea', '{{route("app.configuration.refreshRegions")}}');
				Wateja.unSet(region_name);
				if(res.error){
					Wateja.showFeedBack(regionForm, res.msg, res.error);
				}else{
					Wateja.showFeedBack(regionFBk, res.msg, res.error);                                                                                                                                                                                                                                                                                                  
				}
				
			});
		}
	});
});
</script>