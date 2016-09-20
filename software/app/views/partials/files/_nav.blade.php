<div class="container">
                    <div class="navbar-collapse2">
                        <ul class="nav navbar-nav hidden-xs">
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                                <div class="dropdown-menu grid-dropdown">
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                        </div>
                                    </div>
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>-->
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">English  <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Kiswahili</a></li>
                                </ul>
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if(Auth::user()->role_id != 1)Company: <i><b>{{Company::find(Auth::user()->company_id)->name}}@endif</b></i> </a>
                                
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if(Auth::user()->role_id != 1)Branch: <i><b>{{Branch::find(Auth::user()->branch_id)->name}}@endif</b></i> </a>
                                
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if(Auth::user()->role_id != 1)Package: <i><b class="label label-warning">{{HelperX::getPackage()}} ({{HelperX::getDays()}} days)@endif</b></i> </a>
                                
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if(Auth::user()->role_id != 1)Days Remain: <i><b class="label label-primary">{{HelperX::getRemainDays()}} days @endif</b></i> </a>
                                
                            </li>
                            <li class="language_bar dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if(Auth::user()->role_id != 1)Messages: <i><b class="label label-info"> {{ HelperX::getMess()  }}   @endif</b></i> </a>
                                
                            </li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right top-navbar">
                            <!--                            <li class="dropdown iconify hide-phone">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                                                            <ul class="dropdown-menu dropdown-message">
                                                                <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                                                <li class="unread">
                                                                    <a href="#">
                                                                        <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                                            <br /><i>2 minutes ago</i>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li class="unread">
                                                                    <a href="#">
                                                                        <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                                                            <br /><i>8 minutes ago</i>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <p><strong>John Malkovich</strong> Added 3 products
                                                                            <br /><i>3 hours ago</i>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                                            <br /><i>12 hours ago</i>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                                                            <br /><i>Yesterday</i>
                                                                        </p>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-footer">
                                                                    <div class="btn-group btn-group-justified">
                                                                        <div class="btn-group">
                                                                            <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown iconify hide-phone">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                                                            <ul class="dropdown-menu dropdown-message">
                                                                <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                                                <li class="unread">
                                                                    <a href="#" class="clearfix">
                                                                        <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                                        <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                                    </a>
                                                                </li>
                                                                <li class="unread">
                                                                    <a href="#" class="clearfix">
                                                                        <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                                        <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="clearfix">
                                                                        <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                                        <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                                                            </ul>
                                                        </li>-->
                            <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                            <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{url('images/user.png')}}"></span> <strong>{{Auth::user()->username}}</strong> <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                    <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>