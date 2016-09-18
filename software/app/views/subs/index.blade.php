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
                                <h4><i class="fa fa-list"></i> Manage Users</h4>
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
                                                                <th>Company</th>
                                                                <th>Branch</th>
                                                                <th>Licence</th>
                                                                <th>Tried</th>
                                                                
                                                                <th>Created At</th>
                                                                
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                           <?php $i = 1;
                                                            $subs = Subscription::orderBy('created_at', 'DESC')->get();
                                                            ?>

                                                            @foreach($subs as $s)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{Package::find($s->subscription_id)->package}}</td>
                                                                
                                                                <td>{{HelperX::getStatus($s->status)}}</td>

                                                                <td>{{Company::find($s->company_id)->name}}</td>

                                                                <td>{{Branch::find($s->branch_id)->name}}</td>

                                                                <td><b class="label label-danger">{{$s->licience}}</b></td>

                                                                <td>{{$s->tried == 1 ? '<label class="label label-success">YES</label>' : '<label class="label label-primary">NO</label>'}}</td>

                                                                <td>{{Carbon::parse($s->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($s->id, route('modules.delete'), route('modules.edit'),'subs')}}</td>
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