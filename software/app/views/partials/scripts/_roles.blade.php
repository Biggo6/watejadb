@include('partials.scripts._onlyJquery')

<script type="text/javascript">
$(function(){
	$('#jstree').jstree({

	  "checkbox" : {
	    "keep_selected_style" : true
	  },
	  "plugins" : [ "wholerow", "checkbox" ]
	});
});
</script>