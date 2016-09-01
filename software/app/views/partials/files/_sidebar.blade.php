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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('app.dashboard') }} '>
                    <span><i class="fa fa-dashboard"></i> Dashboard </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('company.add')}}' class=' {{ Helper::activeRoute('company.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Company </span>
                </a>
            </li>
            <li>
                <a href='{{route('company.manage')}}' class=' {{ Helper::activeRoute('company.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Company </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('users.add')}}' class=' {{ Helper::activeRoute('users.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('users')}}' class=' {{ Helper::activeRoute('users') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('customers.add')}}' class=' {{ Helper::activeRoute('customers.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Customer </span>
                </a>
            </li>
            <li>
                <a href='{{route('customers')}}' class=' {{ Helper::activeRoute('customers') }} '>
                    <span><i class="fa fa-list"></i> Manage Customers </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('messages.add')}}' class=' {{ Helper::activeRoute('messages.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('messages')}}' class=' {{ Helper::activeRoute('messages') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('visits.add')}}' class=' {{ Helper::activeRoute('visits.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('visits')}}' class=' {{ Helper::activeRoute('visits') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('groups.add')}}' class=' {{ Helper::activeRoute('groups.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('groups')}}' class=' {{ Helper::activeRoute('groups') }} '>
                    <span><i class="fa fa-list"></i> Manage Users </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('roles.add')}}' class=' {{ Helper::activeRoute('roles.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Role </span>
                </a>
            </li>
            <li>
                <a href='{{route('roles')}}' class=' {{ Helper::activeRoute('roles') }} '>
                    <span><i class="fa fa-list"></i> Manage Roles </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('permissions.add')}}' class=' {{ Helper::activeRoute('permissions.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Permission </span>
                </a>
            </li>
            <li>
                <a href='{{route('permissions.index')}}' class=' {{ Helper::activeRoute('permissions.index') }} '>
                    <span><i class="fa fa-list"></i> Manage Permissions </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('business.add')}}' class=' {{ Helper::activeRoute('business.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Business </span>
                </a>
            </li>
            <li>
                <a href='{{route('business.index')}}' class=' {{ Helper::activeRoute('business.index') }} '>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Package </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Packages </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Subscription </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Subscriptions </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
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
                <a href='{{route('app.configuration.regions')}}' class=' {{ Helper::activeRoute('app.configuration.regions') }} '>
                    <span><i class="fa fa-list"></i> Regions</span>
                </a>
            </li> 
            <li>
                <a href='{{route('app.configuration.districts')}}' class=' {{ Helper::activeRoute('app.configuration.districts') }} '>
                    <span><i class="fa fa-list"></i> Districts</span>
                </a>
            </li>
            <li>
                <a href='{{route('app.configuration.modules')}}' class=' {{ Helper::activeRoute('app.configuration.modules') }} '>
                    <span><i class="fa fa-list"></i> Modules</span>
                </a>
            </li> 
            <li>
                <a href='{{route('app.configuration.branches')}}' class=' {{ Helper::activeRoute('app.configuration.branches') }} '>
                    <span><i class="fa fa-list"></i> Branches</span>
                </a>
            </li>   
        </ul>
    </li>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Licence Key </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Licence Keyes </span>
                </a>
            </li>
        </ul>
    </li>
</ul>






