@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage Customers</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
            	<!-- Content Form Goes here -->
            	<div class="col-md-12" id="manage-area">
                                @include('partials.files._success')
                                <h4><i class="fa fa-list"></i> Manage Customers</h4>
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
                                                                <th>Photo</th>
                                                                <th>Firstname</th>
                                                                
                                                                <th>Lastname</th>
                                                                <th>Phone</th>
                                                                <th>Subscribed To Social Media</th>
                                                                <th>Registered</th>
                                                                
                                                                <th>Created At</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                            <?php $i = 1;

                                                            if(Auth::user()->role_id == 1){
                                                            	$customers = Customer::orderBy('created_at', 'DESC')->get();
                                                            }else{
                                                            	$customers = Customer::orderBy('created_at', 'DESC')->where('added_by', Auth::user()->id)->get();
                                                            }
                                                            
                                                            ?>

                                                            @foreach($customers as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                
                                                                <td><img src="{{Helper::costPic($r->id)}}" style="width:50px" /></td>
                                                                <td>{{$r->firstname}}</td>
                                                                
                                                                <td>{{$r->lastname}}</td>
                                                                <td>{{$r->phone}}</td>
                                                                <td>{{$r->suburb}}</td>
                                                                <td>{{$r->data_source}}</td>

                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{Helper::generateActions($r->id, route('business.delete'), route('business.edit'),'customers')}}

                                                                	&nbsp; <span style="cursor: pointer" class="label label-info" title="View more details" >
																	<i class="fa fa-eye">

                                                                </td>
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