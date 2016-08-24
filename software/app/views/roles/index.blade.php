@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="col-md-12" id="manage-area">
                                @include('partials.files._success')
                                <h4><i class="fa fa-list"></i> Manage Roles</h4>
                                <hr/>
                                <div class="widget">

                                    <div class="widget-content">
                                        <br>	
                                        <div id="regionFBk"></div>		
                                        <div id="regionsArea">		
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
                                                            $roles = Role::orderBy('created_at', 'DESC')->get();
                                                            ?>

                                                            @foreach($roles as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{$r->name}}</td>
                                                                <td>{{$r->system == 1 ? '<label class="label label-danger">System Defined</label>' : '<label class="label label-warning">User Defined</label>'}}</td>
                                                                <td>{{Helper::getStatus($r->status)}}</td>
                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{Helper::generateActions($r->id, route('roles.delete'), route('roles.edit'),'roles')}}</td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

        </div>

    </div>	
</div>


@stop

@section('specific_js_libs')

<script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{url('assets/js/pages/datatables.js')}}"></script>



@stop