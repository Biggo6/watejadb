@include('partials.scripts._OnlyJquery')
<script type="text/javascript">
		window.onload = function(){

			var fileInput = document.getElementById('logo');


			var fileDisplayArea = document.getElementById('logo-placeholder');


			fileInput.addEventListener('change', function(e) {
				var file = fileInput.files[0];
				var imageType = /image.*/;

				if (file.type.match(imageType)) {
				  var reader = new FileReader();

				  reader.onload = function(e) {
					fileDisplayArea.innerHTML = "";

					// Create a new image.
					var img = new Image();
					// Set the img src property using the data URL.
					img.width = 92;
					img.height = 92;
					img.src = reader.result;

					// Add the image to the page.
					fileDisplayArea.appendChild(img);
					$(fileDisplayArea).append("<br/><hr/><label class='label label-danger' style='cursor:pointer' id='removeLogo'><i class='fa fa-trash'></i> REMOVE LOGO</label>");

				  }

				  reader.readAsDataURL(file);
				} else {
				  fileDisplayArea.innerHTML = "<label class='label label-danger'><i class='fa fa-warning'></i> File not supported!</label>";
				  fileDisplayArea.style.borderRadius = "4px";
				  fileDisplayArea.style.border		 = "1px solid #ccc";
				  fileDisplayArea.style.padding		 = "2px";
				  return false;
				}
			});

		}
</script>

<script type="text/javascript">
$(function(){
	$('body').on('click', '#removeLogo', function(){
		$('#logo-placeholder').html('');
		var $el = $('#logo');
		$el.wrap('<form>').closest('form').get(0).reset();
		$el.unwrap();
	});
});
</script>
