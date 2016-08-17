@if(Session::has('Success'))
<div class="alert alert-success flush">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('Success')}}</strong> 
</div>
@endif