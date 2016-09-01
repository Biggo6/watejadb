<div class="table-responsive" >
    <form class='form-horizontal' role='form'>
        <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>



            <tbody >

                <?php $i = 1;
                $branches = Branch::orderBy('created_at', 'DESC')->get();
                ?>

                @foreach($branches as $b)
                <tr>
                    <td>{{$i}}</td>

                    <td>{{$b->name}}</td>
                    <td>{{$b->location}}</td>
                    <td>{{$b->phone}}</td>
                    <td>{{Company::find($b->company_id)->name}}</td>
                    <td>{{Helper::getStatus($b->status)}}</td>
                    <td>{{Carbon::parse($b->created_at)->format('Y-m-d h:i:s')}}</td>
                    <td>{{Helper::generateActions($b->id, route('modules.delete'), route('modules.edit'),'branches')}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
                

            </tbody>
        </table>
    </form>
</div>

@include('partials.scripts._onlyJquery')
@include('partials.scripts._datatable')