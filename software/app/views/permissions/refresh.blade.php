<div class="table-responsive" >
                                                <form class='form-horizontal' role='form'>
                                                    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Module</th>
                                                                <th>Access Route Link</th>
                                                                <th>Action Name</th>
                                                                <th>Status</th>
                                                                <th>Created At</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                            <?php $i = 1;
                                                            $pers = Permission::orderBy('created_at', 'DESC')->get();
                                                            ?>

                                                            @foreach($pers as $p)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{Module::find($p->module_id)->name}}</td>
                                                                <td><label class="label label-default">{{url($p->route_link)}}</label></td>
                                                                <td>{{$p->name}} {{Module::find($p->module_id)->name}}</td>
                                                                <td>{{HelperX::getStatus($p->active)}}</td>
                                                                <td>{{Carbon::parse($p->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($p->id, route('permissions.delete'), route('permissions.edit'),'permissions')}}</td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                            @endforeach
                                                          

                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>


                                            
@include('partials.scripts._onlyJquery')
@include('partials.scripts._datatable')