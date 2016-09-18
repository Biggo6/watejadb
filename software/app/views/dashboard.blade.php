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
                <form action=""  role="form">
                    
                
                    <div class="form-group">
                        <label for="">Widget Type</label>
                        <select class="form-control" id="wtype">
                            <option value="">--Select Wiget Type --</option>
                            @foreach(HelperX::getUserAccessModules() as $m)
                                <option>{{$m}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Widget Category</label>
                        <select class="form-control" id="wcategory">
                            <option value="">--Select Category --</option>
                            <option>Panel</option>
                            <option>Tablural</option>
                            <option>Graph</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Widget Layout Row </label>
                        <select class="form-control" id="wrow">
                            <option value="">--Select Row --</option>
                           @foreach(HelperX::getUserAccessModules() as $m => $k)
                                <option>{{$m + 1}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Widget Layout Columns</label>
                        <select class="form-control" id="wcolumn">
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Widget Content Type</label>
                        <select class="form-control" id="wcontent">
                            <option value="">--Select Content Type --</option>
                            
                        </select>
                    </div>
                
                    
                
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="row top-summary" style="height:600px">

    <?php

    $widgets = Widget::where('added_by', Auth::user()->id)->count();

    ?>  

    @if(count($widgets))

        <div class="alert alert-info"><h3><i class="fa fa-info-circle"></i> You dont have any Widget, you can add by click the Red Button below</h3></div>

    @else


    @endif

    

    <!-- <div class="col-lg-3 col-md-6">
        <div class="widget lightblue-1">
            <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                    <p class="maindata">TOTAL <b>VISITORS</b></p>
                    <h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="widget green-1">
            <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                    <p class="maindata">TOTAL <b>SALES</b></p>
                    <h2><span class="animate-number" data-value="6399" data-duration="3000">0</span></h2>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <i class="fa fa-caret-down rel-change"></i> <b>11%</b> decrease in sales
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="widget orange-4">
            <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                    <p class="maindata">OVERALL <b>INCOME</b></p>
                    <h2>$<span class="animate-number" data-value="70389" data-duration="3000">0</span></h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <i class="fa fa-caret-down rel-change"></i> <b>7%</b> decrease in income
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="widget darkblue-2">
            <div class="widget-content padding">
                <div class="widget-icon">

                </div>
                <div class="text-box">
                    <p class="maindata">TOTAL <b>USERS</b></p>
                    <h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <i class="fa fa-caret-up rel-change"></i> <b>6%</b> increase in users
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div> -->

</div>
<!-- End of info box -->

<div id="back-to-top" ><span data-toggle="modal" href='#addWidgets'><a  href="#" class="btn btn-danger btn-lg back-to-top1" role="button" title="Click to add dashboard Widgets" data-toggle="tooltip" data-placement="left"><span  class="fa fa-plus"></span> </a></span>

    <a  href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to configure Widgets" data-toggle="tooltip" data-placement="left"><span class="fa fa-cog"></span> </a></div>


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
           // alert('we are good!')
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





@stop