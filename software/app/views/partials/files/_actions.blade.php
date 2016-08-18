<span style="cursor: pointer"  class="label label-primary" title="Edit This Record" rowid="{{$rId}}">
	<i class="fa fa-edit"></i>
</span>
&nbsp;
<span style="cursor: pointer" class="label label-danger" onclick="tryToDelete(this)" title="Delete This Record" rowid="{{$rId}}">
	<i class="fa fa-trash"></i>
</span>

@include('partials.scripts._dependencies')

<script type="text/javascript">

function tryToDelete(el){
	//alert(Wateja.getProp(el, 'rowid'));
	Wateja.confirmDialog('Are you sure');
}

$(function(){

});
</script>