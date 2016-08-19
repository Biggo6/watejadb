@foreach($ds as $d)
	<option value="{{$d->id}}">{{$d->name}}</option>
@endforeach