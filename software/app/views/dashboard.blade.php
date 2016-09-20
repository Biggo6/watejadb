@extends('layout')

@section('breadcrumb')
<li><a href="#">Home</a></li><li class="active">Dashboard</li>
@stop

@section('content')

<style type="text/css">
.back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 100px;
    right: 80px;
    //display:none;
}
.back-to-top1 {
    cursor: pointer;
    position: fixed;
    bottom: 100px;
    right: 140px;
    //display:none;
}
</style>



<div class="modal fade" id="addWidgets">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-plus"></i>  New Dashboard Widget</h4>
            </div>
            <div class="modal-body">
                <form id="widget_form" role="form">
                    
                
                    <div class="form-group">
                        <label for="">Widget Type</label>
                        <select class="form-control validate[required]" data-errormessage-value-missing="Widget Type  is required!" data-prompt-position="bottomRight"  name="wtype" id="wtype">
                            <option value="">--Select Wiget Type --</option>
                            @foreach(HelperX::getUserAccessModules() as $m)
                                <option>{{$m}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Widget Category</label>
                        <select class="form-control validate[required]" data-errormessage-value-missing="Widget Category is required!" data-prompt-position="bottomRight"  name="wcategory" id="wcategory">
                            <option value="">--Select Category --</option>
                            <option>Panel</option>
                            <option>Tablural</option>
                            <option>Graph</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Widget Layout Row </label>
                        <select class="form-control validate[required]" data-errormessage-value-missing="Widget Layout Row is required!" data-prompt-position="bottomRight"  name="wrow" id="wrow">
                            <option value="">--Select Row --</option>
                           @foreach(HelperX::getUserAccessModules() as $m => $k)
                                <option>{{$m + 1}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Widget Layout Columns</label>
                        <select class="form-control validate[required]" data-errormessage-value-missing="Widget Layout Columns is required!" data-prompt-position="bottomRight"  name="wcolumn" id="wcolumn">
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Widget Content Type <span style="display:none" id="ld"><img src="{{url('images/ld.gif')}}" /></span></label>
                        <select class="form-control validate[required]" data-errormessage-value-missing="Widget Content Type is required!" data-prompt-position="bottomRight"  name="wcontent" id="wcontent">
                            
                            
                        </select>
                    </div>
                
                    
                
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveWidget">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="row top-summary"  style="height:600px">


    <div id="dashboard_editor">
    <?php

    $widgets = Widget::where('added_by', Auth::user()->id)->count();



    ?>  



    @if($widgets == 0)

        <div class="alert alert-info"><h3><i class="fa fa-info-circle"></i> You dont have any Widget, you can add by click the Red Button below</h3></div>

    @else

        {{View::make('dashboard.widgets')->render()}}

    @endif
    </div>
    



</div>
<!-- End of info box -->
@if(HelperX::canAccess('Reports'))
<div id="back-to-top" ><span data-toggle="modal" href='#addWidgets'><a  href="#" class="btn btn-danger btn-lg back-to-top1" role="button" title="Click to add dashboard Widgets" data-toggle="tooltip" data-placement="left"><span  class="fa fa-plus"></span> New Widget </a></span>

    <!-- <a  href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to configure Widgets" data-toggle="tooltip" data-placement="left"><span class="fa fa-cog"></span> </a> --></div>
    @endif


@include('partials.scripts._dependencies')

<script>
$(function(){
    $('#saveWidget').on('click', function(){
        var registerForm =  $("#widget_form").validationEngine('validate');
        if(registerForm){
            data = Wateja.serializeData(widget_form);
            Wateja.applyOpacity(widget_form);
            Wateja.talkToServer('{{route("dashboard.storeWidget")}}', data).then(function(res){
                
                Wateja.removeOpacity(widget_form);
                if(res.error){
                    Wateja.showFeedBack(widget_form, res.msg, res.error);
                }else{
                    $('#addWidgets').modal('hide');
                    $('#widget_form')[0].reset();
                    $('#dashboard_editor').hide().html(res.msg).fadeIn();                                                                                                                                                                                                                                                                                                         
                }
            });
        }
    });
});
</script>


<script src="{{url('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript">
$(function(){
    $('#wcategory').on('change', function(){
        var c = $(this).val();
        if(c != "Panel"){
            $('#wcolumn').html('<option value="">--Select Columns --</option><option>1</option><option>2</option>');
        }else{
            $('#wcolumn').html('<option value="">--Select Columns --</option><option>1</option><option>2</option><option>3</option><option>4</option>');
        }
    });
    $('#wcolumn').on('change', function(){
        var c  = $(this).val();
        var t  = $('#wtype').val();
        var ct = $('#wcategory').val();
        var r  = $('#wrow').val();
        if(t == ""){
            $('#wtype').css('background-color', '#F2DEDE').delay(200).fadeOut('normal', function(){
                $(this).fadeIn('normal', function(){
                    $(this).css('background-color', '');
                });
            });
        }else if(ct == ""){
            $('#wcategory').css('background-color', '#F2DEDE').delay(200).fadeOut('normal', function(){
                $(this).fadeIn('normal', function(){
                    $(this).css('background-color', '');
                });
            });
        }else if(r == ""){
            $('#wrow').css('background-color', '#F2DEDE').delay(200).fadeOut('normal', function(){
                $(this).fadeIn('normal', function(){
                    $(this).css('background-color', '');
                });
            });
        }else{
           $('#ld').show();
           $.get('{{route("dashboard.getWigetContent")}}', {wcolumn:c, wtype:t, wcategory:ct, wrow:r}, function(res){
                $('#ld').hide();
                $('#wcontent').html(res);
           });
        }
    });

    


});
</script>



@stop



@section('specific_js_libs')

<script src="{{url('assets/libs/d3/d3.v3.js')}}"></script>
<script src="{{url('assets/libs/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{url('assets/libs/raphael/raphael-min.js')}}"></script>
<script src="{{url('assets/libs/morrischart/morris.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-knob/jquery.knob.js')}}"></script>
<script src="{{url('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-jvectormap/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{url('assets/libs/jquery-clock/clock.js')}}"></script>
<script src="{{url('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
<script src="{{url('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{url('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
<script src="{{url('assets/js/apps/calculator.js')}}"></script>
<script src="{{url('assets/js/apps/todo.js')}}"></script>
<script src="{{url('assets/js/apps/notes.js')}}"></script>
<script src="{{url('assets/js/pages/index2.js')}}"></script>

 <script src="{{url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{url('assets/js/pages/datatables.js')}}"></script>



@stop