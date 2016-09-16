<ul>

    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='icon-home-3'></i>
            <span>Home</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('app.dashboard') }} '>
                    <span><i class="fa fa-dashboard"></i> Dashboard </span>
                </a>
            </li>
        </ul>
    </li>

    @if(HelperX::canAccess('Company'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-bank'></i>
            <span>Companies</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('company.add')}}' class=' {{ HelperX::activeRoute('company.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Company </span>
                </a>
            </li>
            <li>
                <a href='{{route('company.manage')}}' class=' {{ HelperX::activeRoute('company.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Company </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Users'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-users'></i>
            <span>Users</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('users.add')}}' class=' {{ HelperX::activeRoute('users.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('users')}}' class=' {{ HelperX::activeRoute('users') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Customers'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-users'></i>
            <span>Customers</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('customers.add')}}' class=' {{ HelperX::activeRoute('customers.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Customer </span>
                </a>
            </li>
            <li>
                <a href='{{route('customers')}}' class=' {{ HelperX::activeRoute('customers') }} '>
                    <span><i class="fa fa-list"></i> Manage Customers </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Groups'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-share-alt'></i>
            <span>Groups</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('groups.add')}}' class=' {{ HelperX::activeRoute('groups.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Group </span>
                </a>
            </li>
            <li>
                <a href='{{route('groups')}}' class=' {{ HelperX::activeRoute('groups') }} '>
                    <span><i class="fa fa-list"></i> Manage Groups </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Messages'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-envelope'></i>
            <span>Messages</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('messages.sms')}}' class=' {{ HelperX::activeRoute('messages.sms') }} '>
                    <span><i class="fa fa-mobile"></i> SMS & Call</span>
                </a>
            </li>
            <li>
                <a href='{{route('messages.instagram')}}' class=' {{ HelperX::activeRoute('messages.instagram') }} '>
                    <span><i class="fa fa-instagram"></i> Instagram - DM </span>
                </a>
            </li>
            <li>
                <a href='{{route('messages.whatsapp')}}' class=' {{ HelperX::activeRoute('messages.whatsapp') }} '>
                    <span><i class="fa fa-whatsapp"></i> Whatsapp </span>
                </a>
            </li>
            
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Visits'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-bicycle'></i>
            <span>Visits</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('visits.add')}}' class=' {{ HelperX::activeRoute('visits.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('visits')}}' class=' {{ HelperX::activeRoute('visits') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Roles'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-key'></i>
            <span>Roles</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('roles.add')}}' class=' {{ HelperX::activeRoute('roles.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Role </span>
                </a>
            </li>
            <li>
                <a href='{{route('roles')}}' class=' {{ HelperX::activeRoute('roles') }} '>
                    <span><i class="fa fa-list"></i> Manage Roles </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Permissions'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-magic'></i>
            <span>Permissions</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('permissions.add')}}' class=' {{ HelperX::activeRoute('permissions.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Permission </span>
                </a>
            </li>
            <li>
                <a href='{{route('permissions.index')}}' class=' {{ HelperX::activeRoute('permissions.index') }} '>
                    <span><i class="fa fa-list"></i> Manage Permissions </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Business'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-briefcase'></i>
            <span>Business</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('business.add')}}' class=' {{ HelperX::activeRoute('business.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Business </span>
                </a>
            </li>
            <li>
                <a href='{{route('business.index')}}' class=' {{ HelperX::activeRoute('business.index') }} '>
                    <span><i class="fa fa-list"></i> Manage Businesses </span>
                </a>
            </li>
            {{-- <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Sub-Business </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Sub-Businesses </span>
                </a>
            </li> --}}
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Packages'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-th'></i>
            <span>Packages</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Package </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Packages </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Subscription'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-dollar'></i>
            <span>Subscription</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Subscription </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Subscriptions </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Licences'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-lock'></i>
            <span>Licences</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('API'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-link'></i>
            <span>API</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Configuration'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-wrench'></i>
            <span>Configuration</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            {{-- <li>
                <a href='{{route('app.configuration')}}' class=' {{ Helper::activeRoute('app.configuration') }} '>
                    <span><i class="fa fa-list"></i> Manage Config</span>
                </a>
            </li> --}}
            <li>
                <a href='{{route('app.configuration.regions')}}' class=' {{ HelperX::activeRoute('app.configuration.regions') }} '>
                    <span><i class="fa fa-list"></i> Regions</span>
                </a>
            </li> 
            <li>
                <a href='{{route('app.configuration.districts')}}' class=' {{ HelperX::activeRoute('app.configuration.districts') }} '>
                    <span><i class="fa fa-list"></i> Districts</span>
                </a>
            </li>
            <li>
                <a href='{{route('app.configuration.modules')}}' class=' {{ HelperX::activeRoute('app.configuration.modules') }} '>
                    <span><i class="fa fa-list"></i> Modules</span>
                </a>
            </li> 
            <li>
                <a href='{{route('app.configuration.branches')}}' class=' {{ HelperX::activeRoute('app.configuration.branches') }} '>
                    <span><i class="fa fa-list"></i> Branches</span>
                </a>
            </li>   
        </ul>
    </li>
    @endif

    @if(HelperX::canAccess('Reports'))
    <li class='has_sub'>
        <a href='javascript:void(0);'>
            <i class='fa fa-line-chart'></i>
            <span>Reports</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ HelperX::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
    @endif


</ul>






