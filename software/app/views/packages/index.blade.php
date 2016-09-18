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
            	<div class="row" style="border: 1px solid #ccc; padding:4px;margin:1px">
                            
                            <div class="col-md-12">
                                <h4><i class="fa fa-list"></i> Manage Packages</h4>
                                <hr/>
                                <div class="widget">

                                    <div class="widget-content">
                                        <br>    
                                        <div id="districtFBk"></div>      
                                        <div id="districtsArea">      
                                            <div class="table-responsive" >
                                                <form class='form-horizontal' role='form'>
                                                    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Package Name</th>
                                                                <th>Status</th>
                                                                <th>Duration</th>
                                                                
                                                                <th>Created At</th>
                                                                
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >


                                                            <?php $i = 1;
                                                            $packages = Package::orderBy('created_at', 'DESC')->get();
                                                            ?>

                                                            @foreach($packages as $p)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{$p->package}}</td>
                                                                <td>{{HelperX::getStatus($p->active)}}</td>
                                                                <td><b>{{$p->duration_days}}</b></td>
                                                                <td>{{Carbon::parse($p->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($p->id, route('business.delete'), route('business.edit'),'packages')}}</td>
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


@stop

@section('specific_js_libs')


<script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{url('assets/js/pages/datatables.js')}}"></script>

@stop