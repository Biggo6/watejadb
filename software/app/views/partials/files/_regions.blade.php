

<div class="table-responsive" >
    <form class='form-horizontal' role='form'>
        <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

           

            <tbody >
                
                <?php $i=1; $regions = Region::orderBy('created_at','DESC')->get(); ?>

                @foreach($regions as $r)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$r->name}}</td>
                    <td>{{Helper::getStatus($r->active)}}</td>
                    <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                    <td>{{Helper::generateActions($r->id, route('app.configuration.deleteRegion'), route('app.configuration.editRegion'))}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
                
            </tbody>
        </table>
    </form>
</div>
@include('partials.scripts._onlyJquery')
@include('partials.scripts._datatable')