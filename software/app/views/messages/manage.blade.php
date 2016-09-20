@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Manage  Company SMS</li>
@stop

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
                <!-- Content Form Goes here -->
                <div class="row" style="border: 1px solid #ccc; padding:4px;margin:1px">
                            <div class="col-md-4" id="branchFormArea">
                                <h4><i class="fa fa-plus"></i> Add New Company SMS</h4>
                                <hr/>
                                <form action="" id="branchForm" method="POST" role="form">
                                    
                                    <div class="form-group">
                                        <label for="">Company</label>
                                        <select id="camp" name="camp" class="form-control validate[required]" data-errormessage-value-missing="Company is required!" data-prompt-position="bottomRight">
                                            <option value="">--- Select Company here --</option>
                                            @foreach(Company::all() as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <input type="text" name="msg" id="msg" class="form-control validate[required,custom[number]]" data-errormessage-value-missing="Message is required!" data-prompt-position="bottomRight"  placeholder=" ">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select id="status" name="status" class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight">
                                            <option value="1">Active</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                                    <button type="button" id="saveSms" class="btn btn-primary">SAVE</button>
                                    <br/>
                                    <br/>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <h4><i class="fa fa-list"></i> Manage Company SMS</h4>
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
                                                                <th>Company</th>
                                                                <th>SMSs</th>
                                                                <th>Remain SMS</th>
                                                                <th>Status</th>
                                                                <th>Created At</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                            <?php $i = 1;
                                                            $sms = CompSMS::orderBy('created_at', 'DESC')->get();
                                                            ?>

                                                            @foreach($sms as $s)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{Company::find($s->company_id)->name}}</td>
                                                                <td>{{$s->total_sms}}</td>
                                                                <td>0</td>
                                                                <td>{{HelperX::getStatus($s->active)}}</td>
                                                                <td>{{Carbon::parse($s->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <td>{{HelperX::generateActions($s->id, route('app.configuration.deleteDistrict'), route('app.configuration.editDistrict'), 'compsms')}}</td>
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

    @include('partials.scripts._compsms');
@stop

@section('specific_js_libs')

    <script src="{{url('assets/js/pages/tabs-accordions.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>


@stop