<!-- Header Content -->
<div class="content-header">
    <!-- Left Section -->
    <div>
        <!-- Toggle Sidebar -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
        <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
        </button>
        <!-- END Toggle Sidebar -->
    </div>
    <!-- END Left Section -->

    <!-- Right Section -->
    <div>
        <!-- User Dropdown -->
        <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block">{{Auth::user()->name}}</span>
                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                    User
                </div>
                <div class="p-2">
                    <a class="dropdown-item" href="{{url('admin/SettingView')}}">
                        <i class="far fa-fw fa-user mr-1"></i> Setting
                    </a>
                    <a class="dropdown-item" href="{{url('admin/logout')}}">
                        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                    </a>
                </div>
            </div>
        </div>
        <!-- END User Dropdown -->

        <!-- Notifications Dropdown 

        <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="badge badge-secondary badge-pill">5</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                    Notifications
                </div>
                <ul class="nav-items my-2">
                    <li>
                        <a class="text-dark media py-2" href="javascript:void(0)">
                            <div class="mx-3">
                                <i class="fa fa-fw fa-check-circle text-success"></i>
                            </div>
                            <div class="media-body font-size-sm pr-2">
                                <div class="font-w600">App was updated to v5.6!</div>
                                <div class="text-muted font-italic">3 min ago</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="text-dark media py-2" href="javascript:void(0)">
                            <div class="mx-3">
                                <i class="fa fa-fw fa-user-plus text-info"></i>
                            </div>
                            <div class="media-body font-size-sm pr-2">
                                <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                <div class="text-muted font-italic">10 min ago</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="text-dark media py-2" href="javascript:void(0)">
                            <div class="mx-3">
                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                            </div>
                            <div class="media-body font-size-sm pr-2">
                                <div class="font-w600">Server backup failed to complete!</div>
                                <div class="text-muted font-italic">30 min ago</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="text-dark media py-2" href="javascript:void(0)">
                            <div class="mx-3">
                                <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                            </div>
                            <div class="media-body font-size-sm pr-2">
                                <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                <div class="text-muted font-italic">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="text-dark media py-2" href="javascript:void(0)">
                            <div class="mx-3">
                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                            </div>
                            <div class="media-body font-size-sm pr-2">
                                <div class="font-w600">New Sale! + $30</div>
                                <div class="text-muted font-italic">2 hours ago</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="p-2 border-top">
                    <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                        <i class="fa fa-fw fa-eye mr-1"></i> View All
                    </a>
                </div>
            </div>
        </div>

        END Notifications Dropdown -->
        <!-- Toggle Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <!-- 
        <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
            <i class="far fa-fw fa-list-alt"></i>
        </button> 
        -->
        <!-- END Toggle Side Overlay -->
    </div>
    <!-- END Right Section -->
</div>