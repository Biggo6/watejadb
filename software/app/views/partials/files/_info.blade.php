@if(Session::has('Info'))
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('Info')}}</strong> 
</div>

@endif