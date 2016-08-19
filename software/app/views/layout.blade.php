<!DOCTYPE html>
<html>
    <head>
        @include('incs.header')
    </head>
    <body class="fixed-left">


        @include('partials.files._logout')
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <div class="topbar-left">
                    <div class="logo">
                        <h1 style="color:#fff">Wateja</h1>
                    </div>
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    @include('partials.files._nav')
                </div>
            </div>

            <!-- Left Sidebar Start -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!-- Search form -->
                    <form role="search" class="navbar-form">
                        <div class="form-group">
                            <input type="text" placeholder="Search" class="form-control">
                            <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <!--- Profile -->
                    <div class="profile-info">
                        <div class="col-xs-4">
                            <a href="profile.html" class="rounded-image profile-image"><img src="{{url('images/user.png')}}"></a>
                        </div>
                        <div class="col-xs-8">
                            <div class="profile-text">Login as <b>{{Auth::user()->username}}</b></div>
                            <div class="profile-buttons">
                                <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                                <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                                <a href="javascript:;" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div class="clearfix"></div>
                    <hr class="divider" />
                    <div class="clearfix"></div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        @include('partials.files._sidebar')
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="clearfix"></div><br><br><br>
                </div>

            </div>


            <!-- Left Sidebar End -->		   	
            <!-- Start right content -->
            <div class="content-page">
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                </ol>			


                <!-- Start Content here -->
                <!-- ============================================================== -->
                <div class="content">
                    
                    @yield("content")
                    <!-- Start info box -->


                    <!-- Footer Start -->

                    @include('partials.files._footer')
                    <!-- Footer End -->			
                </div>
                <!-- ============================================================== -->
                <!-- End content here -->
                <!-- ============================================================== -->

            </div>
            <!-- End right content -->

        </div>

        <!-- End of page -->
        <!-- the overlay modal element -->
        <div class="md-overlay"></div>
        <!-- End of eoverlay modal -->
        @include('incs.footer')
        <!-- Page Specific JS Libraries -->
        @yield('specific_js_libs')
    </body>
</html>