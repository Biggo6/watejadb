@include('partials.scripts._dependencies')
@include('partials.scripts._ve')
<script type="text/javascript">
$(function(){
	$('#saveDistrict').on('click', function(){
		
		var rf =  $("#districtForm").validationEngine('validate');
		if(rf){

			Wateja.applyOpacity(districtForm);
			var data = Wateja.getAllFormData(districtForm);
			Wateja.logIt(data)
			Wateja.talkToServer('{{route("app.configuration.storeDistrict")}}', data).then(function(res){
				Wateja.removeOpacity(districtForm);
				Wateja.refreshViewFromServer('districtsArea', '{{route("app.configuration.refreshDistricts")}}');
				Wateja.unSet(district_name);
				Wateja.unSet(district_region);
				if(res.error){
					Wateja.showFeedBack(districtForm, res.msg, res.error);
				}else{
					Wateja.showFeedBack(districtFBk, res.msg, res.error);                                                                                                                                                                                                                                                                                                
				}
				
			});
		}
	});
});
</script>