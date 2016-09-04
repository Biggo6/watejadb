@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage Districts</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="row" style="border: 1px solid #ccc; padding:4px;margin:1px">
                            <div class="col-md-4" id="moduleFormArea">
                                <h4><i class="fa fa-plus"></i> Add New Module</h4>
                                <hr/>
                                <form action="" id="moduleForm" method="POST" role="form">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="module_name" id="module_name" class="form-control validate[required]" data-errormessage-value-missing="Module name is required!" data-prompt-position="bottomRight"  placeholder="Enter Module Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <select id="module_cat" name="module_cat" class="form-control validate[required]" data-errormessage-value-missing="Category is required!" data-prompt-position="bottomRight">
                                            <option value="">--- Select Module Category here --</option>
                                            <option value="0">User Defined</option>
                                            <option value="1">System Defined</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select id="module_status" name="module_status" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                                    <button type="button" id="saveModule" class="btn btn-primary">SAVE</button>
                                    <br/>
                                    <br/>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <h4><i class="fa fa-list"></i> Manage Modules</h4>
                                <hr/>
                                <div class="widget">

                                    <div class="widget-content">
                                        <br>   
                                        @include('partials.files._success') 
                                        <div id="moduleFBk"></div>      
                                        <div id="modulesArea">      
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

        </div>

    </div>	
</div>

	@include('partials.scripts._modules');
@stop

@section('specific_js_libs')

    <script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>


@stop