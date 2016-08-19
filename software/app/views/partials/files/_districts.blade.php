<div class="table-responsive" >
    <form class='form-horizontal' role='form'>
        <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Region</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>



            <tbody >

                <?php $i = 1;
                $districts = District::orderBy('created_at', 'DESC')->get();
                ?>

                @foreach($districts as $d)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{Region::find($d->region_id)->name}}</td>
                    <td>{{Helper::getStatus($d->active)}}</td>
                    <td>{{Carbon::parse($d->created_at)->format('Y-m-d h:i:s')}}</td>
                    <td>{{Helper::generateActions($d->id, route('app.configuration.deleteDistrict'), route('app.configuration.editDistrict'))}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach

            </tbody>
        </table>
    </form>
</div>

