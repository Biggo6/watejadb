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
                                                                <th>Group Name</th>
                                                                <th>Status</th>
                                                                <th>Customers</th>
                                                                
                                                                <th>Created At</th>
                                                                
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                           <?php $i = 1;
                                                            $groups = Group::orderBy('created_at', 'DESC')->where('added_by', Auth::user()->id)->get();
                                                            ?>

                                                            @foreach($groups as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{$r->group_name}}</td>
                                                                
                                                                <td>{{Helper::getStatus($r->status)}}</td>
                                                                <td>
                                                                	<?php

										                                $customers = CG::where('added_by', Auth::user()->id)->where('group_id', $r->id)->get();
										                                $disabled  = (count($customers) == 0) ? 'disabled' : ''; 

										                             ?>
										                            <div id="cux">
										                                @if(count($customers))
										                                <?php $j = 1; ?>
										                                @foreach($customers as $c)
										                                    <div >
										                                      <label>
										                                        
										                                        {{$j}} : {{Customer::find($c->customer_id)->firstname}} {{Customer::find($c->customer_id)->lastname}} | {{Customer::find($c->customer_id)->phone}}
										                                      </label>
										                                    </div>
										                                    <?php $j++; ?>
										                                @endforeach
										                                @else
										                                    <div class="alert alert-danger"><i class="fa fa-warning"></i> Please add Customers first!</div>
										                                @endif
										                            </div>
                                                                </td>
                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{Helper::generateActions($r->id, route('business.delete'), route('business.edit'),'groups')}}</td>
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