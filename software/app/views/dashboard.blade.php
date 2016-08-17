@extends('layout')

@section('content')

<div class="row top-summary">
    <div class="col-lg-3 col-md-6">
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
    </div>

</div>
<!-- End of info box -->

<div class="row">
    <div class="col-lg-12 portlets">
        <div id="website-statistics1" class="widget">
            <div class="widget-header transparent">
                <h2><i class="icon-chart-line"></i> <strong>Website</strong> Statistics</h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                        <i class="fa fa-cogs"></i>
                    </a>
                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                    <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content">
                <div id="website-statistic" class="statistic-chart">    
                    <div class="row stacked">
                        <div class="col-sm-12">
                            <div class="toolbar">
                                <div class="pull-left">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-default btn-xs">Daily</a>
                                        <a href="#" class="btn btn-default btn-xs active">Monthly</a>
                                        <a href="#" class="btn btn-default btn-xs">Yearly</a>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <a class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                            Export <i class="icon-down-open-2"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Export as PDF</a></li>
                                            <li><a href="#">Export as CSV</a></li>
                                            <li><a href="#">Export as PNG</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="icon-cog-2"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div id="morris-home" class="morris-chart" style="height: 270px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


@stop