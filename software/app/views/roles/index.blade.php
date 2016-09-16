@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<div class="modal fade" id="role">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-key"></i> Permissions</h4>
            </div>
            <div class="modal-body">
                    <center><img id="loader" style="height: 30px; display: none" src="{{url('images/ld.gif')}}" /></center>
                    <div id="perms_editor"></div>
            </div>
            <hr/>
        </div>
    </div>
</div>

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
                                                                <td><a data-toggle="modal" role_id="{{$r->id}}" class="role" href='#role'>{{$r->name}}</a></td>
                                                                <td>{{$r->system == 1 ? '<label class="label label-danger">System Defined</label>' : '<label class="label label-warning">User Defined</label>'}}</td>
                                                                <td>{{HelperX::getStatus($r->status)}}</td>
                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($r->id, route('roles.delete'), route('roles.edit'),'roles')}}</td>
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

<script type="text/javascript">
$(function(){
    $('.role').on('click', function(){
            $('#loader').show();
            var role_id = $(this).attr('role_id');
            $('#perms_editor').html('');
            $.get('{{route("roles.getPerms")}}', {role_id:role_id},function(res){
                $('#loader').hide();
                $('#perms_editor').html(res);
            });
    });
});
</script>

@stop