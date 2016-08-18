<div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
	<div class="md-content">
		<h3>Modal Dialog</h3>
		<div>
			<p>This is a modal window. You can do the following things with it:</p>
			<ul>
				<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
				<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
				<li><strong>Close:</strong> click on the button below to close the modal.</li>
			</ul>
			<p>
			<button class="btn btn-danger md-close">Close me!</button>
			<button class="btn btn-success md-close">Some button</button>
			</p>
		</div>
	</div>
</div>

<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>

<script type="text/javascript">
function applyOpacity(el, value=0.2){
	return $(el).css('opacity', parseFloat(value));
}
function removeOpacity(el){
	$(el).css('opacity', 1);
}
function getAllFormData(el){
	return $(el).serializeArray();
}

function showFeedBack(el, str, error=true){
	if(!error){
		var newDiv = $('<div/>').addClass('alert alert-success flush').html('<h5><i class="fa fa-check-circle"></i> ' + str + '</h5>').delay(1000).fadeOut();
	}else{
		var newDiv = $('<div/>').addClass('alert alert-danger flush').html('<h5><i class="fa fa-close"></i> ' + str + '</h5>').delay(1000).fadeOut();	
	}
  	$(el).before(newDiv);
}

function logIt(str){
	if(this.debug){
		console.log(str);
	}
}

function confirmDialog(str, native=true){
	if(native){
		var cf = confirm(str);
		if(cf){
			return true;
		}else{
			return false;
		}
	}
}

function unSet(el){
	$(el).val('');
}

function getProp(el, key){
	return $(el).attr(key);
}

function parseData(jsn){
	return JSON.parse(jsn);
}

function refreshViewFromServer(view, url){
	$.get(url, function(res){
		$('#' + view).html(res);
	});
}

function talkToServer(url, data, isFileUpload=false, dataType='text', el=null,type='post'){
	var promise = $.ajax({
				
				url: url,
				dataType: dataType, 
				cache: false,
				contentType: false,
				processData: false,
				data: data,
				type: type,
				 xhr: function () {
					var xhr = $.ajaxSettings.xhr();
					xhr.upload.onprogress = function (e) {
						var ps = (Math.floor(e.loaded / e.total * 100) + '%');
						if(el != null){
							$(el).html(ps);
						}
					};
					return xhr;
				}
			});

	var p  = $.post(url,data);

	if(isFileUpload){
		return promise;
	}else{
		return p;
	}
		
	
}

var Wateja = {
	debug : false,
	applyOpacity : applyOpacity,
	removeOpacity : removeOpacity,
	getAllFormData : getAllFormData,
	showFeedBack : showFeedBack,
	logIt : logIt,
	talkToServer : talkToServer,
	parseData : parseData,
	unSet : unSet,
	refreshViewFromServer : refreshViewFromServer,
	getProp : getProp,
	confirmDialog : confirmDialog
}

</script>