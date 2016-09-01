@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage Branches</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="row" style="border: 1px solid #ccc; padding:4px;margin:1px">
                            <div class="col-md-4" id="branchFormArea">
                                <h4><i class="fa fa-plus"></i> Add New Branch</h4>
                                <hr/>
                                <form action="" id="branchForm" method="POST" role="form">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="branch_name" id="branch_name" class="form-control validate[required]" data-errormessage-value-missing="branch name is required!" data-prompt-position="bottomRight"  placeholder="Enter Branch Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="branch_phone" id="branch_phone" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="branch Phone No# is required!" data-prompt-position="bottomRight"  placeholder="Enter Phone No. ">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input type="text" name="branch_location" id="branch_location" class="form-control validate[required]" data-errormessage-value-missing="branch Location is required!" data-prompt-position="bottomRight"  placeholder="Enter Location">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company</label>
                                        <select id="branch_camp" name="branch_camp" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight">
                                            <option value="">--- Select Company here --</option>
                                            @foreach(Company::all() as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select id="branch_status" name="branch_status" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                                    <button type="button" id="saveBranch" class="btn btn-primary">SAVE</button>
                                    <br/>
                                    <br/>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <h4><i class="fa fa-list"></i> Manage Branches</h4>
                                <hr/>
                                <div class="widget">

                                    <div class="widget-content">
                                        <br>   
                                        @include('partials.files._success') 
                                        <div id="branchFBk"></div>      
                                        <div id="branchesArea">      
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

        </div>

    </div>	
</div>

	@include('partials.scripts._branches');
@stop

@section('specific_js_libs')

    <script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>


@stop