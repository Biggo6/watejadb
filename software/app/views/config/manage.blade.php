@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage Configuration</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">

                <ul id="demo5" class="nav nav-tabs nav-simple">
                    <li class="active">
                        <a href="#Regions" data-toggle="tab"><i class="fa fa-globe"></i> Regions</a>
                    </li>
                    <li class="">
                        <a href="#Districts" data-toggle="tab"><i class="fa fa-map-marker"></i> Districts</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="Regions">
                        <div class="row" style="border: 1px solid #ccc; padding:4px;margin:1px">
                            <div class="col-md-4" id="regionFormArea">
                                <h4><i class="fa fa-plus"></i> Add New Region</h4>
                                <hr/>
                                <form action="" id="regionForm" method="POST" role="form">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="region_name" id="region_name" class="form-control validate[required]" data-errormessage-value-missing="Region name is required!" data-prompt-position="bottomRight"  placeholder="Enter Region Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select id="region_active" name="region_active" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                                    <button type="button" id="saveRegion" class="btn btn-primary">SAVE</button>
                                    <br/>
                                    <br/>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <h4><i class="fa fa-list"></i> Manage Regions</h4>
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
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .tab-pane -->
                    <div class="tab-pane fade" id="Districts">

                    </div> <!-- / .tab-pane -->

                </div> <!-- / .tab-content -->
                <hr>


            </div>
        </div>
    </div>

</div>

@include('partials.scripts._regions');
@stop

@section('specific_js_libs')
<script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{url('assets/js/pages/datatables.js')}}"></script>

@stop