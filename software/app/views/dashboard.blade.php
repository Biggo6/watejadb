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
</style>

<div class="row top-summary" style="height:600px">

    

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

<a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="Click to add dashboard Widgets" data-toggle="tooltip" data-placement="left"><span class="fa fa-plus"></span> New Dashboard Widget</a>


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