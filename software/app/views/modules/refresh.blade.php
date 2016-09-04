<div class="table-responsive" >
<form class='form-horizontal' role='form'>
    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>



        <tbody >

            <?php $i = 1;
            $modules = Module::orderBy('created_at', 'DESC')->get();
            ?>

            @foreach($modules as $m)
            <tr>
                <td>{{$i}}</td>
                <td>{{$m->name}}</td>
                <td>{{$m->system == 1 ? '<label class="label label-danger">System Defined</label>' : '<label class="label label-warning">User Defined</label>'}}</td>
                <td>{{HelperX::getStatus($m->status)}}</td>
                <td>{{Carbon::parse($m->created_at)->format('Y-m-d h:i:s')}}</td>
                <td>{{HelperX::generateActions($m->id, route('modules.delete'), route('modules.edit'),'modules')}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach

        </tbody>
    </table>
</form>
</div>

@include('partials.scripts._onlyJquery')
@include('partials.scripts._datatable')