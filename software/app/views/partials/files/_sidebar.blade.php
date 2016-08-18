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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add User </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Role </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Permission </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
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
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Business </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Businesses </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.add') }} '>
                    <span><i class="fa fa-plus"></i> Add Sub-Business </span>
                </a>
            </li>
            <li>
                <a href='{{route('app.dashboard')}}' class=' {{ Helper::activeRoute('compay.manage') }} '>
                    <span><i class="fa fa-list"></i> Manage Sub-Businesses </span>
                </a>
            </li>
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
            <i class='fa fa-wrench'></i>
            <span>Configuration</span> 
            <span class="pull-right">
                <i class="fa fa-angle-down"></i>
            </span>
        </a>
        <ul>
            <li>
                <a href='{{route('app.configuration')}}' class=' {{ Helper::activeRoute('app.configuration') }} '>
                    <span><i class="fa fa-list"></i> Manage Config</span>
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






