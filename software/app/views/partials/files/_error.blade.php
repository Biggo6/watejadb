@if(Session::has('Error'))
<div class="alert alert-danger flush">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('Error')}}</strong> 
</div>
@include('partials.scripts._flush')
@endif