@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<style type="text/css">
.tokenize-sample { width: 467px; height: 50px }
</style>




<div class="row">
    <div class="col-sm-12">
        <div class="widget">

            <div class="widget-content padding">
                <!-- Content Form Goes here -->
                <div class="col-md-4">
                    <h4><i class="fa fa-edit"></i> Composer New SMS <a data-modal="new-message" class="md-trigger"> <label  style="cursor: pointer" class="label label-success pull-right"><i class="fa fa-plus"></i> Group SMS</label></a></h4>
                    <hr/>
                    <form action="" id="smsForm" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Receivers</label>
                            <br/>
                            <select id="tokenize" name="smsRecs" multiple="multiple" class="tokenize-sample" data-errormessage-value-missing="Customers is required!" data-prompt-position="bottomRight">
                                <?php $customers = Customer::where('added_by', Auth::user()->id)->get(); ?>
                                @foreach($customers as $c)
                                <option value="{{$c->id}}">{{$c->firstname}} {{$c->lastname}} - 255{{{$c->phone}}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Compose SMS</label>
                            <textarea class="form-control validate[required]" data-errormessage-value-missing="SMS is required!" data-prompt-position="bottomRight" id="smsSMS" name="smsSMS" rows="6"></textarea>
                        </div>
                        
                        
                        <button type="button" id="smsSend" class="btn btn-danger">SEND SMS NOW</button>
                        <br/>
                        <br/>
                    </form>
                </div>
                <div class="col-md-8">
                    <h4><i class="fa fa-list"></i> Manage Your SMS</h4>
                    <hr/>
                    <div class="table-responsive" >
                                                <form class='form-horizontal' role='form'>
                                                    <table id="datatables-1" class="table table-striped table-bordered datatables-1" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Receiver</th>
                                                                <th>Group</th>
                                                                <th>Body</th>
                                                                <th>Status</th>
                                                                <th>Created At</th>
                                                                <!--<th>Actions</th>-->
                                                            </tr>
                                                        </thead>



                                                        <tbody >

                                                            <?php $i = 1;
                                                            $regions = Message::orderBy('created_at', 'DESC')->where('sender', Auth::user()->id)->get();
                                                            ?>

                                                            @foreach($regions as $r)
                                                            <tr>
                                                                <td>{{$i}}</td>
                                                                <td>{{$r->receiver}}</td>
                                                                <td>{{'<label class="label label-warning">' . $r->group_name . '</label>'  }}</td>
                                                                <td>{{$r->body}}</td>
                                                                <td><label class="label label-primary">{{$r->status}}</label></td>
                                                                <td>{{Carbon::parse($r->created_at)->format('Y-m-d h:i:s')}}</td>
                                                                <!--<td>{{--HelperX::generateActions($r->id, route('business.delete'), '','business')--}}</td>-->
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

        <div class="md-modal md-slide-stick-top"  id="new-message" style="width:700px">
            <div class="md-content" style="background-color: #f5f5f5">
            <div class="md-close-btn"><a class="md-close"><i class="fa fa-times"></i></a></div>
                <h3><strong>New</strong> Message</h3>
                <div>
                    <form role="form" id="smsGroupForm">
                        <div class="form-group">
                            <label for="">Groups</label>
                            <br/>
                            <select id="tokenize-group" multiple="multiple" class="tokenize-sample">
                                <?php $groups = Group::where('added_by', Auth::user()->id)->get(); ?>
                                @foreach($groups as $c)
                                <option value="{{$c->id}}">{{{$c->group_name}}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Compose SMS</label>
                            <textarea class="form-control validate[required]" data-errormessage-value-missing="SMS is required!" data-prompt-position="bottomRight" id="smsGroupBody" class="summernote-small form-control" rows="7"></textarea>
                        </div>
                        
                            
                             <hr/>
                            <div id="logo-placeholder-2"></div>
                            <div class="row">
                            <div class="col-xs-8">
                                <button type="button" id="smsGroup" class="btn btn-success btn-sm">Send SMS NOW</button>
                            </div>
                            <div class="col-xs-4">
                                
                            </div>
                        </div>  
                    </form>
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